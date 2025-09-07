<!-- Header -->
<header class="sticky top-0 z-40 bg-white/70 dark:bg-slate-950/60 glass border-b border-slate-200/60 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex items-center justify-between h-16">
        
        <a href="/" class="flex items-center gap-2 font-extrabold text-lg tracking-tight">
        <span class="inline-flex h-8 w-8 rounded-xl bg-brand-600 text-white items-center justify-center shadow-soft">Biz</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="180.15" height="44" class="fill-slate-800 dark:fill-slate-200" viewBox="0 0 180.15 44">
            <text x="0" y="35" font-family="'Orbitron', sans-serif" font-weight="800" font-size="35">Groupket</text>
        </svg>
        </a>
        
        <nav class="hidden md:flex items-center gap-8 text-sm">
        <a href="#features" class="hover:text-brand-600">Features</a>
        <a href="#showcase" class="hover:text-brand-600">Showcase</a>
        <a href="#pricing" class="hover:text-brand-600">Pricing</a>
        <a href="#faq" class="hover:text-brand-600">FAQ</a>
        </nav>
        <div class="flex items-center gap-3">
        <button id="themeToggle" class="p-2 rounded-xl border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900" aria-label="Toggle dark mode">
            <svg id="sun" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v2m0 14v2m7-7h2M3 12H1m15.364-6.364l1.414 1.414M6.222 17.778l-1.414 1.414m0-12.728l1.414 1.414m10.606 10.606l1.414-1.414M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
            <svg id="moon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:hidden" viewBox="0 0 24 24" fill="currentColor"><path d="M21.752 15.002A9.718 9.718 0 0112 21.75 9.75 9.75 0 1113.001 2.25a.75.75 0 01.154 1.482A8.25 8.25 0 1019.268 14.85a.75.75 0 011.482.153z"/></svg>
        </button>
        @auth
            <div class="hidden sm:flex sm:items-center">
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" 
                class="text-slate-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 transition">
                Log in
            </a>
            <a href="{{ route('register') }}" 
            class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 text-white dark:bg-white dark:text-slate-900 hover:opacity-90 shadow-soft text-sm font-semibold transition">
                Register
            </a>
        @endauth
        <button class="md:hidden p-2" id="openMenu" aria-label="Open menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        </div>
    </div>
    </div>
    <!-- Mobile Nav -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-200 dark:border-slate-800 bg-white/90 dark:bg-slate-950/90 glass">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 grid gap-4 text-sm">
        <a href="#features" class="hover:text-brand-600">Features</a>
        <a href="#showcase" class="hover:text-brand-600">Showcase</a>
        <a href="#pricing" class="hover:text-brand-600">Pricing</a>
        <a href="#faq" class="hover:text-brand-600">FAQ</a>
    </div>
    </div>
</header>
<script>
    // Theme toggle
    const root = document.documentElement;
    const toggle = document.getElementById('themeToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const openMenu = document.getElementById('openMenu');

    function setTheme(dark) {
    if (dark) {
        root.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        root.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
    }

    // Init
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(saved ? saved === 'dark' : prefersDark);

    toggle.addEventListener('click', () => {
    setTheme(!root.classList.contains('dark'));
    });

    // Mobile menu
    openMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    });
</script>