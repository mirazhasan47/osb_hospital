<?php

namespace App\Http\Controllers;

use App\Models\BaoJournal;
use App\Support\BaoPublishedJournals;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BaoAdminController extends Controller
{
    public function sessionStatus(Request $request): JsonResponse
    {
        return response()->json([
            'authenticated' => (bool) $request->session()->get('bao_admin_authenticated'),
        ]);
    }

    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($request->input('username') !== 'admin' || $request->input('password') !== '12345') {
            return response()->json([
                'message' => 'Invalid username or password.',
            ], 422);
        }

        $request->session()->put('bao_admin_authenticated', true);

        return response()->json([
            'message' => 'Logged in successfully.',
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->session()->forget('bao_admin_authenticated');

        return response()->json([
            'message' => 'Logged out.',
        ]);
    }

    public function journals(): JsonResponse
    {
        $restricted = BaoPublishedJournals::getRestrictedIds();

        $rows = BaoJournal::query()
            ->orderByDesc('created_at')
            ->get(['id', 'title', 'original_filename', 'created_at']);

        return response()->json([
            'restriction_active' => $restricted !== null,
            'data' => $rows->map(function (BaoJournal $j) use ($restricted) {
                $visible = $restricted === null || in_array((int) $j->id, $restricted, true);

                return [
                    'id' => $j->id,
                    'title' => $j->title ?: $j->original_filename,
                    'original_filename' => $j->original_filename,
                    'submitted_at' => $j->created_at->toIso8601String(),
                    'visible_to_public' => $visible,
                    'pdf_url' => route('bao.journals.pdf', $j),
                ];
            }),
        ]);
    }

    public function updatePublished(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'ids' => ['present', 'array'],
            'ids.*' => ['integer'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $requested = array_values(array_unique(array_map('intval', $request->input('ids', []))));
        $validIds = BaoJournal::query()->whereIn('id', $requested)->pluck('id')->all();

        if (count($validIds) !== count($requested)) {
            return response()->json([
                'message' => 'One or more journal IDs are invalid.',
            ], 422);
        }

        BaoPublishedJournals::setPublishedIds($validIds);

        return response()->json([
            'message' => 'Public journal list updated.',
        ]);
    }
}
