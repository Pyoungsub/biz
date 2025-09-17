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
                <x-profile-button />
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
            <div class="border-t border-slate-200/60 dark:border-slate-800 flex items-center justify-end gap-4 pt-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a href="{{ route('logout') }}" class="block text-slate-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 transition"
                                        @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" 
                        class="block text-slate-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 transition">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" 
                        class="block items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 text-white dark:bg-white dark:text-slate-900 hover:opacity-90 shadow-soft text-sm font-semibold transition">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>