<!-- Navigation Section -->
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
                    <a href="{{ route('articles.index') }}"
                        class="{{ request()->routeIs('articles.index') ? 'nav-link-active' : 'nav-link' }}">
                        Kelola Artikel
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
            <a href="{{ route('articles.index') }}"
                class="{{ request()->routeIs('articles') ? 'nav-link-active block' : 'nav-link block' }}">
                Kelola Berita
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