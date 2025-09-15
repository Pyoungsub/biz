<aside 
    class="fixed inset-y-0 left-0 w-64 bg-white/80 backdrop-blur-md border-r border-gray-200 shadow-lg transform transition-transform duration-300 ease-in-out md:translate-x-0 z-50"
    :class="{'-translate-x-full': !open, 'translate-x-0': open}"
>
    <!-- Logo -->
    <div class="flex items-center justify-between h-16 border-b border-gray-300 px-4">
        <h1 class="text-xl font-bold text-gray-800">Admin Panel</h1>
        <button @click="open = !open" class="block sm:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
    <!-- Navigation -->
    <nav class="mt-4">
        <!-- Dashboard -->
        <a href="{{route('admin.dashboard')}}" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/>
            </svg>
            Dashboard
        </a>

        <!-- Users with submenu -->
        <div>
            <button @click="activeMenu === 'users' ? activeMenu = null : activeMenu = 'users'" 
                    class="flex items-center w-full px-6 py-3 text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 rounded-lg transition-colors focus:outline-none">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.788.626 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Users
            <svg :class="activeMenu === 'users' ? 'rotate-90' : ''" class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            </button>
            <div x-show="activeMenu === 'users'" x-transition class="ml-12 mt-1 space-y-1">
                <a href="#all-users" class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-500">All Users</a>
                <a href="#add-user" class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-500">Add User</a>
            </div>
        </div>
        <a href="{{route('admin.sites')}}" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            Sites
        </a>
        <a href="{{route('admin.plans')}}" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            Plans
        </a>
        <a href="{{route('admin.inquiries')}}" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            Inquiries
        </a>
        <a href="{{route('admin.servers')}}" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            Servers
        </a>
        
        <!-- Settings -->
        <a href="#settings" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm0 0v-3m0 12v3m9-9h-3M6 12H3m15.364-6.364l-2.121 2.121M6.757 17.657l-2.121 2.121M17.657 17.657l2.121 2.121M6.757 6.343l2.121 2.121"/>
            </svg>
            Settings
        </a>

        <!-- Reports -->
        <a href="#reports" class="flex items-center px-6 py-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18"/>
            </svg>
            Reports
        </a>
    </nav>
</aside>