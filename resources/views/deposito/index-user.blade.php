@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-6">
        <div>
            <h2 class="text-base sm:text-lg lg:text-1xl font-bold text-[#18494C] leading-tight">Daftar Pengajuan Deposito Saya</h2>
            <div class="w-12 sm:w-16 h-1 bg-[#45B7BE] mt-1"></div>
        </div>


        <div class="flex justify-end mb-4">
            <a href="{{ route('deposito.create') }}"
                class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                + Ajukan Deposito
            </a>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-100">
                <thead class="bg-gradient-to-r from-gray-50 to-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-[#000A63] uppercase tracking-wider">
                            Nominal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-[#000A63] uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($depositos as $item)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 text-gray-800 font-medium">
                                Rp{{ number_format($item->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusColor = match ($item->status) {
                                        'approved' => 'bg-emerald-100 text-emerald-800 border border-emerald-300',
                                        'rejected' => 'bg-rose-100 text-rose-800 border border-rose-300',
                                        default => 'bg-amber-100 text-amber-800 border border-amber-300',
                                    };
                                @endphp
                                <span class="px-4 py-1 rounded-full text-sm font-medium {{ $statusColor }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-[#000A63] italic">
                                Belum ada pengajuan deposito.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
