<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income; // Make sure to create an Income model/migration or use session for testing

class AccountantController extends Controller
{
    public function loginCheck(Request $request)
    {
        
        // Check for specific accountant credentials
        if ($request->username === 'accountant' && $request->password === '123456') {
            // In production, use proper Auth. For this specific logic:
            session(['user_role' => 'accountant']);
            return redirect()->route('accountant.dashboard');
        }

        return redirect()->back()->withErrors(['login_error' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        // Fetch incomes from database (or fallback to empty array if migration isn't run yet)
        $incomes = class_exists(\App\Models\Income::class) 
            ? Income::orderBy('created_at', 'desc')->get() 
            : collect(session('mock_incomes', []));

        $totalSum = $incomes->sum('amount');

        return view('accountant.dashboard', compact('incomes', 'totalSum'));
    }

    public function storeIncome(Request $request)
    {
        $request->validate([
            'source' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        if (class_exists(\App\Models\Income::class)) {
            Income::create($request->only(['source', 'amount', 'date']));
        } else {
            // Mocking via session if you just want to test the UI immediately
            $mockIncomes = session('mock_incomes', []);
            $mockIncomes[] = (object)[
                'source' => $request->source,
                'amount' => $request->amount,
                'date' => $request->date
            ];
            session(['mock_incomes' => $mockIncomes]);
        }

        return redirect()->route('accountant.dashboard')->with('success', 'Income added successfully!');
    }
}