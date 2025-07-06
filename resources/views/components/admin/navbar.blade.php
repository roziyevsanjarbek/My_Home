<header class="bg-white border-b border-gray-200 shadow-sm">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <button onclick="toggleSidebar()" class="lg:hidden text-gray-500 hover:text-gray-700 p-2 rounded-md transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Bosh Sahifa</h2>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative hidden md:block">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                    <input type="text" id="searchInput" class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Bolalarni qidirish...">
                </div>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">🔔</button>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">👤</button>
            </div>
        </div>
    </div>
</header>
