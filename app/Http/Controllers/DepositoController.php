<?php

// app/Http/Controllers/DepositoController.php
namespace App\Http\Controllers;

use App\Models\Deposito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositoController extends Controller
{


    public function index()
    {
        if (auth()->user()->role === 'admin') {
            // Admin lihat semua pengajuan
            $depositos = Deposito::all();
            return view('deposito.index-admin', compact('depositos'));
        } else {
            // User biasa lihat pengajuan milik sendiri saja
            $depositos = Deposito::where('user_id', auth()->id())->get();
            return view('deposito.index-user', compact('depositos'));
        }
    }

    public function create()
    {
        return view('deposito.create');
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

        Deposito::create([
            'user_id' => Auth::id(),
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'jumlah' => $request->jumlah,
            'jangka_waktu' => $request->jangka_waktu,
            'foto_ktp' => $fotoPath,
        ]);

        return redirect()->route('deposito.index')->with('success', 'Pengajuan deposito berhasil.');
    }


    public function approve($id)
    {
        $deposito = Deposito::findOrFail($id);
        $deposito->update(['status' => 'approved']);
        return back()->with('success', 'Deposito disetujui.');
    }

    public function reject($id)
    {
        $deposito = Deposito::findOrFail($id);
        $deposito->update(['status' => 'rejected']);
        return back()->with('success', 'Deposito ditolak.');
    }
}
