@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-6">
        <div>
            <h2 class="text-base sm:text-lg lg:text-1xl font-bold text-[#18494C] leading-tight">Daftar Pengajuan Pembiayaan Saya</h2>
            <div class="w-12 sm:w-16 h-1 bg-[#45B7BE] mt-1"></div>
        </div>

        <div class="flex justify-end mb-4">
            <a href="{{ route('pembiayaan.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                + Ajukan Pembiayaan
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-100">
                <thead class="bg-gradient-to-r from-gray-100 to-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Jumlah</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Keperluan</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($pembiayaans as $item)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-800 font-medium">
                                Rp{{ number_format($item->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $item->tujuan_pembiayaan }}</td>
                            <td class="px-6 py-4">
                                @php
                                    $statusColor = match ($item->status) {
                                        'approved' => 'bg-green-100 text-green-800 border border-green-300',
                                        'rejected' => 'bg-red-100 text-red-800 border border-red-300',
                                        default => 'bg-yellow-100 text-yellow-800 border border-yellow-300',
                                    };
                                @endphp
                                <span class="px-4 py-1 rounded-full text-sm font-semibold {{ $statusColor }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center px-6 py-4 text-gray-500 italic">
                                Belum ada pengajuan pembiayaan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
