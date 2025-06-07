<?php

// app/Http/Controllers/PembiayaanController.php

namespace App\Http\Controllers;

use App\Models\Pembiayaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembiayaanController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            // Admin melihat semua pengajuan pembiayaan
            $pembiayaans = Pembiayaan::all();
            return view('pembiayaan.index-admin', compact('pembiayaans'));
        } else {
            // User melihat pengajuannya sendiri
            $pembiayaans = Pembiayaan::where('user_id', auth()->id())->get();
            return view('pembiayaan.index-user', compact('pembiayaans'));
        }
    }


    public function create()
    {
        return view('pembiayaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_ktp' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto_ktp')) {
            $fotoPath = $request->file('foto_ktp')->store('ktp', 'public');
        }

        Pembiayaan::create([
            'user_id' => Auth::id(),
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'jumlah' => $request->jumlah,
            'tujuan_pembiayaan' => $request->tujuan_pembiayaan,
            'foto_ktp' => $fotoPath,
        ]);

        return redirect()->route('pembiayaan.index')->with('success', 'Pengajuan pembiayaan berhasil.');
    }

    public function approve($id)
    {
        $pembiayaan = Pembiayaan::findOrFail($id);
        $pembiayaan->update(['status' => 'approved']);
        return back()->with('success', 'Pembiayaan disetujui.');
    }

    public function reject($id)
    {
        $pembiayaan = Pembiayaan::findOrFail($id);
        $pembiayaan->update(['status' => 'rejected']);
        return back()->with('success', 'Pembiayaan ditolak.');
    }
}
