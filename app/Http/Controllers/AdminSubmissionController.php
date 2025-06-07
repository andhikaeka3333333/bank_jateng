<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;

class AdminSubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::with('user')->latest()->get();
        return view('submissions.index-admin', compact('submissions'));
    }

    public function approve($id)
    {
        $submission = Submission::findOrFail($id);
        $submission->update(['status' => 'approved']);

        // Tambahkan ke saldo user
        $submission->user->increment('balance', $submission->initial_balance);

        return back()->with('success', 'Pengajuan disetujui.');
    }

    public function reject($id)
    {
        $submission = Submission::findOrFail($id);
        $submission->update(['status' => 'rejected']);

        return back()->with('success', 'Pengajuan ditolak.');
    }
}

