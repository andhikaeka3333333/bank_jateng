<nav class="sticky top-0 z-50 flex items-center justify-between px-8 py-3 bg-white shadow">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <img src="https://bucket-api.baznas.go.id/bucket-api/file?bucket=bzn-fdr-smb-p5739641&file=attachments/rekening/172292650008666680_497-v2-Bank-Jateng-Syariah.png"
            alt="Bank Jateng Syariah" class="h-10">
    </div>

    <!-- Search -->
    <div class="flex items-center w-80">
        <div class="flex items-center w-full bg-gray-100 rounded-md px-3 py-2">
            <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103 10.5a7.5 7.5 0 0013.15 6.15z" />
            </svg>
            <input type="text" placeholder="Search From here..."
                class="bg-transparent w-full focus:outline-none text-sm text-gray-600">
        </div>
    </div>

    <!-- Menu -->
    <div class="flex items-center space-x-1 ml-4">
        <a href="/"
            class="flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 {{ Request::is('/') ? 'bg-blue-100 text-blue-700' : '' }}">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4" />
            </svg>
            Home
        </a>
        <a href="/sejarah"
            class="flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 {{ Request::is('sejarah') ? 'bg-blue-100 text-blue-700' : '' }}">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Sejarah Bank Jateng
        </a>
        <a href="/tentang"
            class="flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 {{ Request::is('tentang') ? 'bg-blue-100 text-blue-700' : '' }}">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9.75v4.5m0-7.5h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Tentang Kami
        </a>
        <a href="/pimpinan"
            class="flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 {{ Request::is('pimpinan') ? 'bg-blue-100 text-blue-700' : '' }}">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.182 0 4.214.524 6.121 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Pimpinan Direksi
        </a>
    </div>

    <!-- Login / Register OR Dashboard -->
    @if (Route::has('login'))
        <div class="flex items-center space-x-4 ml-4">
            @auth
                <a href="{{ route('dashboard') }}"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 {{ Request::routeIs('dashboard') ? 'bg-blue-100 text-blue-700' : '' }}">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="text-blue-600 font-semibold {{ Request::routeIs('login') ? 'bg-blue-100 text-blue-700 px-3 py-2 rounded-md' : '' }}">
                    Masuk
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-gradient-to-r from-blue-700 to-teal-500 text-white px-4 py-2 rounded-md font-semibold text-sm shadow hover:opacity-90 {{ Request::routeIs('register') ? 'ring-2 ring-offset-2 ring-blue-500' : '' }}">
                        Daftar
                    </a>
                @endif
            @endauth
        </div>
    @endif
</nav>
