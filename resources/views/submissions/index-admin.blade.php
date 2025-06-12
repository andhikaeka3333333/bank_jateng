@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto mt-8 p-6 bg-white rounded shadow">
        <div>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18494C] leading-tight">Daftar Pengajuan Tabungan</h1>
            <div class="w-16 sm:w-24 h-2 bg-[#45B7BE] mt-2"></div>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto mt-8">
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">#</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">NIK</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah (Rp)</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($submissions as $s)
                        <tr class="text-center">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $s->full_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $s->nik }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ number_format($s->initial_balance, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if ($s->status === 'pending')
                                    <span class="text-yellow-600 font-semibold">Pending</span>
                                @elseif($s->status === 'approved')
                                    <span class="text-green-600 font-semibold">Approved</span>
                                @else
                                    <span class="text-red-600 font-semibold">Rejected</span>
                                @endif
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if ($s->status === 'pending')
                                    <div class="flex justify-center gap-2">
                                        <form action="{{ route('admin.tabungan.approve', $s->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded">Approve</button>
                                        </form>
                                        <form action="{{ route('admin.tabungan.reject', $s->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Reject</button>
                                        </form>
                                    </div>
                                @else
                                    <span class="text-gray-500 italic">No Action</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center p-4">Tidak ada pengajuan tabungan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
