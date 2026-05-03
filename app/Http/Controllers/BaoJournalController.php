<?php

namespace App\Http\Controllers;

use App\Models\BaoJournal;
use App\Support\BaoPublishedJournals;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BaoJournalController extends Controller
{
    public function index(): JsonResponse
    {
        $rows = BaoJournal::query()
            ->orderByDesc('created_at')
            ->get(['id', 'title', 'original_filename', 'created_at']);

        $restricted = BaoPublishedJournals::getRestrictedIds();
        if ($restricted !== null) {
            $allowed = array_flip($restricted);
            $rows = $rows->filter(fn (BaoJournal $j) => isset($allowed[(int) $j->id]))->values();
        }

        return response()->json([
            'data' => $rows->map(function (BaoJournal $j) {
                return [
                    'id' => $j->id,
                    'title' => $j->title ?: $j->original_filename,
                    'original_filename' => $j->original_filename,
                    'submitted_at' => $j->created_at->toIso8601String(),
                    'pdf_url' => route('bao.journals.pdf', $j),
                ];
            }),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => ['nullable', 'string', 'max:255'],
            'pdf' => ['required', 'file', 'mimes:pdf', 'max:20480'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $file = $request->file('pdf');
        $path = $file->store('bao_journals', 'public');

        $journal = BaoJournal::create([
            'title' => $request->input('title') ?: pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'original_filename' => $file->getClientOriginalName(),
            'file_path' => $path,
        ]);

        BaoPublishedJournals::appendPublishedIdIfRestricted((int) $journal->id);

        return response()->json([
            'message' => 'Journal submitted successfully.',
            'journal' => [
                'id' => $journal->id,
                'title' => $journal->title,
                'pdf_url' => route('bao.journals.pdf', $journal),
            ],
        ], 201);
    }

    public function pdf(Request $request, BaoJournal $journal): BinaryFileResponse
    {
        $isAdmin = (bool) $request->session()->get('bao_admin_authenticated');
        if (! BaoPublishedJournals::isVisibleToPublic((int) $journal->id) && ! $isAdmin) {
            abort(404);
        }

        $abs = Storage::disk('public')->path($journal->file_path);
        if (! is_file($abs)) {
            abort(404);
        }

        return response()->file($abs, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$journal->original_filename.'"',
        ]);
    }
}
