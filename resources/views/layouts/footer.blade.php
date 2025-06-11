<!-- Footer Section -->
<footer class="bg-white border-t border-gray-200 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 text-gray-700">
        <!-- Logo & Deskripsi -->
        <div>
            <a href="{{ route('dashboard') }}" class="inline-flex items-center mb-4">
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Bank_Jateng_logo.svg/120px-Bank_Jateng_logo.svg.png"
                    alt="Bank Jateng Logo" class="h-12 w-auto" />
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
                <li><a href="{{ route('deposito.index') }}" class="hover:text-yellow-600 transition">Deposito</a>
                </li>
                <li><a href="{{ route('tabungan.index') }}" class="hover:text-yellow-600 transition">Tabungan</a>
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
                <a href="#" aria-label="Instagram" class="text-gray-500 hover:text-yellow-600 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7 2C4.79 2 3 3.79 3 6v12c0 2.21 1.79 4 4 4h10c2.21 0 4-1.79 4-4V6c0-2.21-1.79-4-4-4H7zm10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5 2.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-200 mt-8 py-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} Bank Jateng. All rights reserved.
    </div>
</footer>