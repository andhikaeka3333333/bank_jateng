@extends('layouts.app')

@section('content')
    <div>
        <h3 class="text-3xl font-extrabold text-blue-800">
            Halo, {{ Auth::user()->name }}!
        </h3>
        <p class="mt-2 text-gray-700">
            Selamat datang di sistem informasi Bank Jateng. Kami siap membantu Anda dalam mengelola tabungan,
            deposito, dan pembiayaan dengan aman dan mudah.
        </p>
    </div>
    </div>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-gradient-to-r from-blue-500 to-blue-400 text-white rounded-xl p-5 shadow-md hover:shadow-lg">
            <h4 class="text-lg font-semibold">Tabungan</h4>
            <p class="text-sm mt-1">Kelola dan pantau tabungan Anda dengan mudah dan cepat, serta efesien</p>
        </div>
        <div class="bg-gradient-to-r from-yellow-400 to-yellow-300 text-white rounded-xl p-5 shadow-md hover:shadow-lg">
            <h4 class="text-lg font-semibold">Deposito</h4>
            <p class="text-sm mt-1">Dapatkan keuntungan yang lebih maksimal dari investasi deposito Anda.</p>
        </div>
        <div class="bg-gradient-to-r from-green-400 to-green-300 text-white rounded-xl p-5 shadow-md hover:shadow-lg">
            <h4 class="text-lg font-semibold">Pembiayaan</h4>
            <p class="text-sm mt-1">Ajukan pembiayaan dengan proses yang mudah dan terpercaya, serta cepat</p>
        </div>
        <div class="bg-gradient-to-r from-blue-500 to-blue-400 text-white rounded-xl p-5 shadow-md hover:shadow-lg">
            <h4 class="text-lg font-semibold">Chat Jatengai</h4>
            <p class="text-sm mt-1">Tanya seputar bank jateng dan perbankan syariah bersama asisten AI 24 Jam</p>
        </div>
    @endsection
