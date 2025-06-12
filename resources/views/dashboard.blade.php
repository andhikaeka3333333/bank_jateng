@extends('layouts.app')

@section('content')
    <!-- Floating Button JatengAI -->
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center shadow-lg transition duration-300 z-50"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-6 h-6 sm:w-8 sm:h-8 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <div class="w-full h-screen bg-gradient-to-b from-blue-900 to-blue-600 relative overflow-hidden">
        <img src="{{ asset('images/wayang.png') }}" alt="Wayang Kiri"
            class="absolute left-0 top-0 h-full object-cover opacity-25 md:opacity-30 pointer-events-none z-0">
        <img src="{{ asset('images/image 8 (1).png') }}" alt="Wayang Kanan"
            class="absolute right-0 top-0 h-full object-cover opacity-25 md:opacity-30 pointer-events-none z-0">

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-6">
            <img src="https://syariah.bankjateng.co.id/media/LOGO_SYARIAH-04.png" alt="Logo Bank Jateng" class="mb-6 h-14">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Halo, {{ Auth::user()->name }}!</h1>
            <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-2xl">
                Solusi perbankan digital Anda untuk tabungan, deposito, dan transaksi aman dalam genggaman.
            </p>

            <div class="rounded-2xl p-6 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-white">Fitur Utama</h2>
                </div>

                <!-- Steps Horizontal Scroll Container -->
                <div class="overflow-x-auto">
                    <div class="flex space-x-4 pb-4">
                        <!-- Step 1: Tabungan -->
                        <a href="{{ Auth::user()->role === 'admin' ? route('admin.tabungan.index') : route('tabungan.index') }}"
                            class="inline-block text-left p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow min-w-[200px]">
                            <div class="flex items-center mb-2">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 text-purple-700 mr-2">1</span>
                                <div>
                                    <h3 class="text-md font-medium text-gray-800">Tabungan</h3>
                                    <p class="text-sm text-gray-600 mt-1">Kelola tabungan Anda dengan mudah dan cepat.</p>
                                </div>
                            </div>
                        </a>

                        <!-- Step 2: Deposito -->
                        <a href="/deposito"
                            class="inline-block text-left p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow min-w-[200px]">
                            <div class="flex items-center mb-2">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 text-purple-700 mr-2">2</span>
                                <div>
                                    <h3 class="text-md font-medium text-gray-800">Deposito</h3>
                                    <p class="text-sm text-gray-600 mt-1">Maksimalkan keuntungan dari investasi Anda.</p>
                                </div>
                            </div>
                        </a>

                        <!-- Step 3: Pembayaran -->
                        <a href="/pembiayaan"
                            class="inline-block text-left p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow min-w-[200px]">
                            <div class="flex items-center mb-2">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 text-purple-700 mr-2">3</span>
                                <div>
                                    <h3 class="text-md font-medium text-gray-800">Pembiayaan</h3>
                                    <p class="text-sm text-gray-600 mt-1">Proses pembiayaan yang aman dan cepat.</p>
                                </div>
                            </div>
                        </a>

                        <!-- Step 4: Chat Jatengai -->
                        <a href="/jatengai"
                            class="inline-block text-left p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow min-w-[200px]">
                            <div class="flex items-center mb-2">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 text-purple-700 mr-2">4</span>
                                <div>
                                    <h3 class="text-md font-medium text-gray-800">Chat Jatengai</h3>
                                    <p class="text-sm text-gray-600 mt-1">Tanya jawab 24 jam dengan asisten AI.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
