@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto bg-white shadow-xl p-6 rounded-lg mt-8">
        <h2 class="text-2xl font-bold mb-6">Pengajuan Deposito</h2>
        <form action="{{ route('deposito.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input name="nama_lengkap" placeholder="Nama Lengkap" class="w-full border p-2 mb-4 rounded" required>
            <input name="nik" placeholder="NIK" class="w-full border p-2 mb-4 rounded" required>
            <input name="alamat" placeholder="Alamat" class="w-full border p-2 mb-4 rounded" required>
            <input name="jumlah" placeholder="Jumlah (Rp)" type="number" class="w-full border p-2 mb-4 rounded" required>
            <select name="jangka_waktu" class="w-full border p-2 mb-4 rounded">
                <option value="6 bulan">6 Bulan</option>
                <option value="12 bulan">12 Bulan</option>
            </select>
            <label class="block mb-2 text-sm font-medium text-gray-700">Upload Foto KTP</label>
            <input type="file" name="foto_ktp" class="w-full border p-2 mb-4 rounded" required>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Kirim</button>
        </form>

    </div>
@endsection
