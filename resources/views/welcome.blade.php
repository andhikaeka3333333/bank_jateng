<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Branch Bank Jateng Syariah</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,600,700,800" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-900 font-sans antialiased">

    <div class="min-h-screen bg-gradient-to-b from-[#e6f4ea] via-[#f0fdf4] to-[#f9fafb]">

        <!-- Header -->
        <header class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
            <img src="https://bucket-api.baznas.go.id/bucket-api/file?bucket=bzn-fdr-smb-p5739641&file=attachments/rekening/172292650008666680_497-v2-Bank-Jateng-Syariah.png" alt="" width="120">
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="px-5 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-[#146C43] hover:underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="bg-[#146C43] text-white px-5 py-2 rounded-md text-sm hover:bg-[#125e3b] shadow">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-extrabold leading-tight mb-6 text-[#0F172A]">
                    Solusi Digital Perbankan Syariah<br class="hidden md:block" />
                    Cepat dan Mudah
                </h2>
                <p class="text-lg text-gray-700 mb-8">
                    E-Branch Bank Jateng Syariah adalah layanan perbankan digital yang memungkinkan Anda membuka
                    tabungan, deposito, dan pengajuan pembiayaan <strong>secara online</strong> tanpa harus datang ke
                    kantor cabang. Aman, transparan, dan sesuai syariah.
                </p>
                <a href="{{ route('register') }}"
                    class="inline-block bg-[#146C43] text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-[#125e3b] shadow-lg transition">
                    Mulai Sekarang
                </a>
            </div>
            <div>
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjEqAbl-uiNQFnuo08iSW8G-zbrOj9DBIESdrQiPAoMaQVToBwSvopJip-rw9Nf1TXSwwqNXsugXxUhKs5Gb595MclsBBkmpFHfWjDJ1O6EG0gn6d_aEaz8KB1BNdkqyoxZAl0jZoC73TXK/s1600/registrasi-uin-walisongo-bank-jateng-ideapers.com.jpg"
                    alt="E-Branch Illustration" class="w-full max-w-md mx-auto rounded-xl drop-shadow-xl">
            </div>
        </section>

        <!-- Fitur E-Branch -->
        <section class="bg-white py-20 px-6">
            <div class="max-w-6xl mx-auto">
                <h3 class="text-center text-2xl font-bold text-[#146C43] mb-12">Mengapa Pilih E-Branch?</h3>
                <div class="grid md:grid-cols-3 gap-10">
                    <div
                        class="bg-gradient-to-tr from-[#ecfdf5] to-white border p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2 text-[#166534]">100% Online</h4>
                        <p class="text-sm text-gray-600">Buka rekening, deposito, hingga ajukan pembiayaan langsung dari
                            rumah Anda.</p>
                    </div>
                    <div
                        class="bg-gradient-to-tr from-[#fefce8] to-white border p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2 text-[#92400e]">Syariah & Transparan</h4>
                        <p class="text-sm text-gray-600">Dikelola berdasarkan prinsip syariah yang adil, bebas riba, dan
                            diawasi Dewan Syariah Nasional.</p>
                    </div>
                    <div
                        class="bg-gradient-to-tr from-[#e0f2fe] to-white border p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2 text-[#1d4ed8]">Cepat & Aman</h4>
                        <p class="text-sm text-gray-600">Data Anda dilindungi dengan standar keamanan perbankan terkini.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Sejarah Bank Jateng -->
        <section class="bg-[#fefce8] py-20 px-6">
            <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center">

                <!-- Konten teks: kiri -->
                <div class="w-full lg:w-1/2 text-left lg:pr-12">
                    <h2 class="text-4xl lg:text-5xl font-bold text-[#78350f] mb-6">
                        Sejarah Bank Jateng
                    </h2>
                    <p class="text-gray-800 leading-relaxed text-md text-justify">
                        Bank Pembangunan Daerah Jawa Tengah didirikan di Semarang berdasarkan Surat Persetujuan Menteri
                        Pemerintah Umum & Otonomi Daerah No. DU 57/1/35 tanggal 13 Maret 1963 serta Izin Usaha dari
                        Menteri Urusan Bank Sentral No. 4/Kep/MUBS/63 tanggal 14 Maret 1963. Operasional pertamanya
                        dimulai pada 6 April 1963 di Gedung Bapindo, Jl. Pahlawan No. 3 Semarang.

                        Tujuan pendiriannya adalah mengelola keuangan daerah sebagai pemegang Kas Daerah serta mendukung
                        peningkatan ekonomi daerah melalui pemberian kredit kepada pengusaha kecil. Bank ini dimiliki
                        oleh Pemerintah Provinsi Jawa Tengah bersama Pemerintah Kabupaten/Kota se-Jawa Tengah.

                        Sejak awal berdiri, Bank mengalami beberapa perubahan bentuk badan usaha. Tahun 1969, ditetapkan
                        sebagai BUMD melalui Perda No. 3 Tahun 1969. Pada tahun 1993, statusnya berubah menjadi
                        Perusahaan Daerah melalui Perda No. 1 Tahun 1993.

                        Kemudian, berdasarkan Perda No. 6 Tahun 1998 dan Akta Pendirian No. 1 tanggal 1 Mei 1999, serta
                        disahkan oleh Keputusan Menteri Kehakiman RI No. C2.8223.HT.01.01 Tahun 1999 tanggal 15 Mei
                        1999, bank berubah menjadi Perseroan Terbatas. Pada 7 Mei 1999, Bank mengikuti Program
                        Rekapitalisasi Perbankan, dan menyelesaikannya pada 7 Mei 2005 melalui pembelian kembali saham
                        yang dimiliki Pemerintah Pusat oleh Pemerintah Provinsi dan Kabupaten/Kota se-Jawa Tengah.
                    </p>

                    <!-- CTA tombol -->
                    <a href="https://www.bankjateng.co.id/tentang-kami/korporasi/informasi-umum/tentang-perusahaan"
                        class="mt-6 inline-block bg-[#78350f] text-white px-6 py-3 rounded-lg shadow-lg hover:bg-[#5a2709] transition">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                <!-- Gambar: kanan -->
                <div class="w-full lg:w-1/2 mt-12 lg:mt-0 relative">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="https://infoekonomi.id/wp-content/uploads/2024/01/GEDUNG_BANK_JATENG_MERAH_PUTIH_1-e1704443807735.webp"
                            alt="Gedung Bank Jateng" class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Profil Direktur -->
        <section class="py-20 px-6 bg-white">
            <div class="max-w-3xl mx-auto grid md:grid-cols-2 gap-12 items-center">
                <img src="https://wwwback.bankjateng.co.id/media/Irianto_Harko_Saputro_TEvvoWJ.jpg"
                    alt="Irianto Harko Saputro" class="rounded-xl shadow-lg w-full object-cover" />
                <div>
                    <h3 class="text-2xl font-semibold text-[#146C43] mb-3">Irianto Harko Saputro</h3>
                    <h3 class="text-2xl font-semibold text-[#78350f] mb-3">Direktur Bank Jateng</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Direktur Utama Bank Jateng per April 2025, Irianto merupakan figur visioner dalam
                        transformasi digital Bank Jateng.
                        Ia membawa pengalaman luas di bidang perbankan, khususnya dalam pengembangan unit Syariah
                        dan layanan berbasis teknologi.
                    </p>
                </div>
            </div>
        </section>



        <!-- CTA -->
        <section class="bg-gradient-to-r from-[#fdf6e3] to-[#fff7ed] py-16 px-6 text-center rounded-t-3xl shadow-inner">
            <h3 class="text-2xl font-bold mb-4 text-[#78350f]">Nikmati Kemudahan Bertransaksi Tanpa Antri</h3>
            <p class="mb-6 text-[#92400e] max-w-xl mx-auto">
                Gunakan layanan E-Branch Bank Jateng Syariah dan lakukan semua transaksi keuangan Anda secara
                efisien & islami dari mana saja.
            </p>
            @guest
                <a href="{{ route('register') }}"
                    class="inline-block bg-[#D97706] text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-[#b45309] transition duration-300 shadow-md">
                    Daftar Sekarang
                </a>
            @endguest
        </section>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-16">
            <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 text-gray-700">

                <!-- Logo & Deskripsi -->
                <div>
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center mb-4">
                        <img src="https://bucket-api.baznas.go.id/bucket-api/file?bucket=bzn-fdr-smb-p5739641&file=attachments/rekening/172292650008666680_497-v2-Bank-Jateng-Syariah.png" alt="" width="100">
                    </a>
                    <p class="text-sm leading-relaxed">
                        Solusi perbankan terpercaya yang memberikan layanan terbaik untuk masyarakat Jawa Tengah dan
                        sekitarnya.
                    </p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h3 class="text-yellow-600 font-semibold mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('deposito.index') }}"
                                class="hover:text-yellow-600 transition">Deposito</a>
                        </li>
                        <li><a href="{{ route('tabungan.index') }}"
                                class="hover:text-yellow-600 transition">Tabungan</a>
                        </li>
                        <li><a href="{{ route('pembiayaan.index') }}"
                                class="hover:text-yellow-600 transition">Pembiayaan</a></li>
                        @if (Auth::check() && Auth::user()->role === 'admin')
                            <li><a href="{{ route('deposito.index') }}" class="hover:text-yellow-600 transition">Kelola
                                    Pengajuan</a></li>
                        @endif
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-yellow-600 font-semibold mb-4">Kontak Kami</h3>
                    <address class="not-italic text-sm space-y-2">
                        <p>Jl. Pemuda No.142, Semarang, Jawa Tengah</p>
                        <p>Telp: 0243547541</p>
                        <p>Email: <a href="mailto:callcenter14066@bankjateng.co.id"
                                class="hover:text-yellow-600 transition">callcenter14066@bankjateng.co.id</a></p>
                    </address>
                </div>

                <!-- Media Sosial -->
                <div>
                    <h3 class="text-yellow-600 font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" aria-label="Facebook" class="text-gray-500 hover:text-yellow-600 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7h-3v-3h3v-2c0-3 1.8-4.7 4.5-4.7 1.3 0 2.6.2 2.6.2v3h-1.5c-1.5 0-2 1-2 2v2h3.4l-.5 3h-2.9v7A10 10 0 0 0 22 12z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter" class="text-gray-500 hover:text-yellow-600 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.46 6c-.77.35-1.6.6-2.46.7a4.3 4.3 0 0 0 1.9-2.38 8.6 8.6 0 0 1-2.7 1.04 4.3 4.3 0 0 0-7.3 3.92A12.2 12.2 0 0 1 3.15 5.1a4.3 4.3 0 0 0 1.33 5.7 4.27 4.27 0 0 1-1.95-.54v.05a4.3 4.3 0 0 0 3.46 4.2 4.3 4.3 0 0 1-1.94.07 4.3 4.3 0 0 0 4 3 8.6 8.6 0 0 1-5.3 1.82 8.75 8.75 0 0 1-1-.06 12.15 12.15 0 0 0 6.58 1.93c7.9 0 12.22-6.54 12.22-12.2 0-.19 0-.38-.01-.57A8.7 8.7 0 0 0 22.46 6z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram"
                            class="text-gray-500 hover:text-yellow-600 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M7 2C4.79 2 3 3.79 3 6v12c0 2.21 1.79 4 4 4h10c2.21 0 4-1.79 4-4V6c0-2.21-1.79-4-4-4H7zm10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5 2.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="border-t border-gray-200 mt-8 py-4 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} Bank Jateng. All rights reserved.
            </div>
        </footer>
    </div>
</body>

</html>
