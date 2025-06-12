@extends('layouts.app')

@section('content')


<div class="max-w-3xl mx-auto mt-12 px-6 sm:px-8 py-8 bg-white shadow-xl rounded-2xl transition-all duration-300">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Profil Akun</h2>

    @if (session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-800 font-semibold rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-8 space-y-2 text-gray-700">
        <div><span class="font-medium">Nama:</span> {{ $user->name }}</div>
        <div><span class="font-medium">Email:</span> {{ $user->email }}</div>
        <div><span class="font-medium">Role:</span> {{ ucfirst($user->role) }}</div>
    </div>

    <hr class="my-8 border-gray-200">

    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Ganti Password</h3>

    <form action="{{ route('profil.updatePassword') }}" method="POST" class="grid gap-6">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Password Lama</label>
            <input type="password" name="current_password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-400 focus:outline-none" />
            @error('current_password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Password Baru</label>
            <input type="password" name="new_password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-400 focus:outline-none" />
            @error('new_password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Konfirmasi Password Baru</label>
            <input type="password" name="new_password_confirmation" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-400 focus:outline-none" />
        </div>

        <div class="pt-2">
            <button type="submit"
                class="w-full sm:w-auto bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded-xl shadow transition duration-200">
                Simpan Password
            </button>
        </div>
    </form>
</div>
@endsection
