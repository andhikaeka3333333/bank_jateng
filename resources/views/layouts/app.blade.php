<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Branch Bank Jateng')</title>
    <!-- Tailwind CSS CDN (bisa ganti dengan versi build sendiri) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Style untuk link aktif dan normal */
        .nav-link {
            @apply text-gray-600 hover:text-yellow-500 transition font-medium;
        }

        .nav-link-active {
            @apply text-yellow-600 font-semibold border-b-2 border-yellow-600;
        }

        .btn-danger {
            @apply bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded;
        }
    </style>
</head>
<!-- Floating Button JatengAI -->
<a href="{{ url('/jatengai') }}"
    class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition duration-300"
    title="Jateng AI">
    <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
        alt="Jateng AI" class="w-50 h-50 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
</a>


<body class="bg-gray-50 min-h-screen">

    <nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="text-yellow-600 font-bold text-xl">
                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Bank_Jateng_logo.svg/120px-Bank_Jateng_logo.svg.png"
                            alt="">
                    </a>

                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('deposito.index') }}"
                        class="{{ request()->routeIs('deposito.index') ? 'nav-link-active' : 'nav-link' }}">
                        Deposito
                    </a>
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.tabungan.index') : route('tabungan.index') }}"
                        class="{{ request()->is('tabungan*') ? 'nav-link-active' : 'nav-link' }}">
                        Tabungan
                    </a>
                    <a href="{{ route('pembiayaan.index') }}"
                        class="{{ request()->is('pembiayaan*') ? 'nav-link-active' : 'nav-link' }}">
                        Pembiayaan
                    </a>
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        <a href="{{ route('deposito.index') }}"
                            class="{{ request()->routeIs('deposito.index') ? 'nav-link-active' : 'nav-link' }}">
                            Kelola Pengajuan
                        </a>
                    @endif
                </div>
                <!-- Profile & Logout Desktop -->
                <div x-data="{ open: false }" class="hidden sm:flex items-center space-x-4 relative">
                    <div @click="open = !open" class="flex items-center cursor-pointer select-none">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=FACC15&color=fff&bold=true&rounded=true&size=40"
                            alt="Avatar {{ Auth::user()->name }}" class="w-10 h-10 rounded-full shadow" />
                        <div class="ml-3 text-sm text-gray-700">
                            <div class="font-semibold">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-gray-500">{{ ucfirst(Auth::user()->role) }}</div>
                        </div>
                    </div>

                    <!-- Dropdown Logout -->
                    <form method="POST" action="{{ route('logout') }}"
                        class="absolute top-full right-0 mt-2 w-40 bg-white border border-gray-200 rounded shadow-lg"
                        x-show="open" @click.outside="open = false" x-transition style="display: none;">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 focus:outline-none">
                            Logout
                        </button>
                    </form>
                </div>



                <!-- Hamburger -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = !open"
                        class="p-2 rounded-md text-gray-600 hover:bg-yellow-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="sm:hidden border-t border-gray-200 bg-white px-6 py-4 space-y-4"
            style="display: none;">
            <a href="{{ route('deposito.index') }}"
                class="{{ request()->routeIs('deposito.index') ? 'nav-link-active block' : 'nav-link block' }}">
                Deposito
            </a>
            <a href="{{ route('tabungan.index') }}"
                class="{{ request()->is('tabungan*') ? 'nav-link-active block' : 'nav-link block' }}">
                Tabungan
            </a>
            <a href="{{ route('pembiayaan.index') }}"
                class="{{ request()->is('pembiayaan*') ? 'nav-link-active block' : 'nav-link block' }}">
                Pembiayaan
            </a>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a href="{{ route('deposito.index') }}"
                    class="{{ request()->routeIs('deposito.index') ? 'nav-link-active block' : 'nav-link block' }}">
                    Kelola Pengajuan
                </a>
            @endif

            <div class="border-t border-gray-200 pt-4">
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=FACC15&color=fff&bold=true&rounded=true&size=40"
                        alt="Avatar {{ Auth::user()->name }}" class="w-10 h-10 rounded-full shadow" />
                    <div>
                        <div class="font-semibold text-gray-700">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-gray-500">{{ ucfirst(Auth::user()->role) }}</div>
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">
                        Logout
                    </button>
                </form>

            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8">
        @yield('content')
    </main>


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
            &copy; {{ date('Y') }} Bank Jateng. All rights reserved.
        </div>
    </footer>


</body>

</html>
