@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-8">
        <div class="bg-gradient-to-r from-emerald-500 to-emerald-700 text-white rounded-2xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-bold">Saldo Tabungan Anda</h2>
            <p class="text-3xl font-semibold mt-2">Rp {{ number_format($user->balance, 0, ',', '.') }}</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-lg font-semibold mb-4 text-emerald-700">Formulir Pengajuan Tabungan</h2>
            <form method="POST" action="{{ route('tabungan.store') }}">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <input type="text" name="full_name" placeholder="Nama Lengkap"
                            class="w-full border border-emerald-300 rounded-lg px-4 py-2 shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                            required>
                    </div>
                    <div>
                        <input type="text" name="nik" placeholder="NIK"
                            class="w-full border border-emerald-300 rounded-lg px-4 py-2 shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                            required>
                    </div>
                    <div>
                        <textarea name="address" placeholder="Alamat" rows="3"
                            class="w-full border border-emerald-300 rounded-lg px-4 py-2 shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                            required></textarea>
                    </div>
                    <div>
                        <input type="text" name="savings_type" placeholder="Jenis Tabungan"
                            class="w-full border border-emerald-300 rounded-lg px-4 py-2 shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                            required>
                    </div>
                    <div>
                        <input type="number" name="initial_balance" placeholder="Jumlah Tabungan (Rp)"
                            class="w-full border border-emerald-300 rounded-lg px-4 py-2 shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                            required>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded">
                    Ajukan Tabungan
                </button>
            </form>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4 text-emerald-700">Riwayat Pengajuan</h2>
            <table class="table-auto w-full">
                <thead class="text-emerald-600">
                    <tr>
                        <th class="px-4 py-2 border-b">Tanggal</th>
                        <th class="px-4 py-2 border-b">Jumlah</th>
                        <th class="px-4 py-2 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submissions as $s)
                        <tr class="hover:bg-emerald-50">
                            <td class="border px-4 py-2">{{ $s->created_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">Rp {{ number_format($s->initial_balance, 0, ',', '.') }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $s->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
