@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengajuan Deposito Saya</h2>

        <div class="flex justify-end mb-4">
            <a href="{{ route('deposito.create') }}"
                class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                + Ajukan Deposito
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-100">
                <thead class="bg-gradient-to-r from-gray-100 to-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Nominal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($depositos as $item)
                        <tr class="hover:bg-gray-50 transition">
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
                                <span class="px-4 py-1 rounded-full text-sm font-semibold {{ $statusColor }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-gray-500 italic">
                                Belum ada pengajuan deposito.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
