<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $submissions = $user->submissions()->latest()->get();
        return view('submissions.index-user', compact('user', 'submissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'nik' => 'required|string',
            'address' => 'required|string',
            'savings_type' => 'required|string',
            'initial_balance' => 'required|numeric|min:10000',
        ]);

        Submission::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'nik' => $request->nik,
            'address' => $request->address,
            'savings_type' => $request->savings_type,
            'initial_balance' => $request->initial_balance,
        ]);

        return back()->with('success', 'Pengajuan tabungan berhasil dikirim.');
    }
}
