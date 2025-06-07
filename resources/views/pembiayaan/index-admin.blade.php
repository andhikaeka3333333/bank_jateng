@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto mt-8 p-6 bg-white rounded shadow">
        <h2 class="text-3xl font-semibold mb-6">Daftar Pengajuan Pembiayaan</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">NIK</th>
                        <th class="border px-4 py-2">Alamat</th>
                        <th class="border px-4 py-2">Jumlah</th>
                        <th class="border px-4 py-2">Keperluan</th>
                        <th class="border px-4 py-2">Foto KTP</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pembiayaans as $item)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $item->nama_lengkap }}</td>
                            <td class="border px-4 py-2">{{ $item->nik }}</td>
                            <td class="border px-4 py-2">{{ $item->alamat }}</td>
                            <td class="border px-4 py-2">Rp{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                            <td class="border px-4 py-2">{{ $item->tujuan_pembiayaan }}</td>
                            <td class="border px-4 py-2">
                                @if ($item->foto_ktp)
                                    <img src="{{ asset('storage/' . $item->foto_ktp) }}" alt="KTP"
                                        class="w-16 h-16 object-cover rounded cursor-pointer"
                                        onclick="showModal('{{ asset('storage/' . $item->foto_ktp) }}')">
                                @else
                                    <span class="text-gray-400 italic">Belum ada</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                @if ($item->status === 'pending')
                                    <span class="text-yellow-600 font-semibold">Pending</span>
                                @elseif($item->status === 'approved')
                                    <span class="text-green-600 font-semibold">Approved</span>
                                @else
                                    <span class="text-red-600 font-semibold">Rejected</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                @if ($item->status === 'pending')
                                    <div class="flex justify-center gap-2">
                                        <form action="{{ route('pembiayaan.approve', $item->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-green-600 text-white px-3 py-1 rounded">Approve</button>
                                        </form>
                                        <form action="{{ route('pembiayaan.reject', $item->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-red-600 text-white px-3 py-1 rounded">Reject</button>
                                        </form>
                                    </div>
                                @else
                                    <span class="text-gray-400 italic">No Action</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center p-4 text-gray-500">Tidak ada pengajuan pembiayaan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Preview --}}
    <div id="imgModal" class="fixed inset-0 hidden bg-black bg-opacity-70 z-50 flex items-center justify-center">
        <div class="relative">
            <button onclick="hideModal()" class="absolute top-0 right-0 text-white text-2xl font-bold px-4 py-2">&times;</button>
            <img id="modalImage" src="" class="max-w-full max-h-screen rounded shadow-lg">
        </div>
    </div>

    <script>
        function showModal(imageUrl) {
            document.getElementById('modalImage').src = imageUrl;
            document.getElementById('imgModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('imgModal').classList.add('hidden');
        }
    </script>
@endsection
