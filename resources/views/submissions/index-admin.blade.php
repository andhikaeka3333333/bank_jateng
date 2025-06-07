@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold mb-4">Daftar Pengajuan Tabungan</h2>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">NIK</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $s)
                <tr>
                    <td class="border px-4 py-2">{{ $s->full_name }}</td>
                    <td class="border px-4 py-2">{{ $s->nik }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($s->initial_balance, 0, ',', '.') }}</td>
                    <td class="border px-4 py-2 capitalize">{{ $s->status }}</td>
                    <td class="border px-4 py-2">
                        @if($s->status == 'pending')
                        <form action="{{ route('admin.tabungan.approve', $s->id) }}" method="POST" class="inline">
                            @csrf
                            <button class="bg-green-600 text-white px-3 py-1 rounded">Approve</button>
                        </form>
                        <form action="{{ route('admin.tabungan.reject', $s->id) }}" method="POST" class="inline ml-2">
                            @csrf
                            <button class="bg-red-600 text-white px-3 py-1 rounded">Reject</button>
                        </form>
                        @else
                        <span class="text-gray-500">-</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
