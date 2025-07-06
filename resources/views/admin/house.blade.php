<x-admin.header></x-admin.header>
<div class="bg-gray-50 font-sans">
<div class="flex h-screen">
    <!-- Sidebar -->
    <x-admin.sidebar></x-admin.sidebar>

    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 z-40 lg:hidden hidden"></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <x-admin.navbar></x-admin.navbar>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50">
            <div class="px-4 sm:px-6 lg:px-8 py-8">
                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Uylar Ro'yxati</h1>
                            <p class="text-gray-600">Barcha ijara uylarini boshqaring va kuzating</p>
                        </div>
                        <a href="add-house.html" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium transition-colors flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Yangi Uy Qo'shish
                        </a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami Uylar</span>
                            <span class="text-gray-400">🏠</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">4</div>
                        <div class="text-xs text-green-600">Barcha faol</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Band Xonalar</span>
                            <span class="text-gray-400">🚪</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">12</div>
                        <div class="text-xs text-blue-600">18 dan</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Bo'sh Xonalar</span>
                            <span class="text-gray-400">🔓</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">6</div>
                        <div class="text-xs text-yellow-600">Ijara uchun tayyor</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Oylik Daromad</span>
                            <span class="text-gray-400">💰</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">15M</div>
                        <div class="text-xs text-green-600">so'm</div>
                    </div>
                </div>

                <!-- Houses Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="housesGrid">
                    <!-- House 1 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Faol</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">1-uy</h3>
                                <p class="text-blue-100">Chilonzor tumani</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <p class="text-sm text-gray-600">Jami xonalar</p>
                                    <p class="text-lg font-semibold text-gray-900">4 xona</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Band</p>
                                    <p class="text-lg font-semibold text-green-600">2 xona</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Bandlik darajasi</span>
                                    <span>50%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Oylik daromad:</span>
                                    <p class="font-medium">2,500,000 so'm</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Xona narxi:</span>
                                    <p class="font-medium">1,250,000 so'm</p>
                                </div>
                            </div>

                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-50 text-blue-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-100 transition-colors">
                                    Ko'rish
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-100 transition-colors">
                                    Tahrirlash
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- House 2 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card">
                        <div class="h-48 bg-gradient-to-r from-green-400 to-green-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Faol</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">2-uy</h3>
                                <p class="text-green-100">Yunusobod tumani</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <p class="text-sm text-gray-600">Jami xonalar</p>
                                    <p class="text-lg font-semibold text-gray-900">5 xona</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Band</p>
                                    <p class="text-lg font-semibold text-green-600">3 xona</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Bandlik darajasi</span>
                                    <span>60%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Oylik daromad:</span>
                                    <p class="font-medium">3,750,000 so'm</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Xona narxi:</span>
                                    <p class="font-medium">1,250,000 so'm</p>
                                </div>
                            </div>

                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-50 text-blue-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-100 transition-colors">
                                    Ko'rish
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-100 transition-colors">
                                    Tahrirlash
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- House 3 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card">
                        <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Faol</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">3-uy</h3>
                                <p class="text-purple-100">Mirzo Ulug'bek tumani</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <p class="text-sm text-gray-600">Jami xonalar</p>
                                    <p class="text-lg font-semibold text-gray-900">3 xona</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Band</p>
                                    <p class="text-lg font-semibold text-green-600">1 xona</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Bandlik darajasi</span>
                                    <span>33%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 33%"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Oylik daromad:</span>
                                    <p class="font-medium">1,250,000 so'm</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Xona narxi:</span>
                                    <p class="font-medium">1,250,000 so'm</p>
                                </div>
                            </div>

                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-50 text-blue-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-100 transition-colors">
                                    Ko'rish
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-100 transition-colors">
                                    Tahrirlash
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- House 4 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card">
                        <div class="h-48 bg-gradient-to-r from-red-400 to-red-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Faol</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">4-uy</h3>
                                <p class="text-red-100">Shayxontohur tumani</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <p class="text-sm text-gray-600">Jami xonalar</p>
                                    <p class="text-lg font-semibold text-gray-900">6 xona</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Band</p>
                                    <p class="text-lg font-semibold text-green-600">6 xona</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Bandlik darajasi</span>
                                    <span>100%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Oylik daromad:</span>
                                    <p class="font-medium">9,000,000 so'm</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Xona narxi:</span>
                                    <p class="font-medium">1,500,000 so'm</p>
                                </div>
                            </div>

                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-50 text-blue-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-100 transition-colors">
                                    Ko'rish
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-100 transition-colors">
                                    Tahrirlash
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .sidebar-link {
        color: #6b7280;
    }

    .sidebar-link:hover {
        background-color: #f3f4f6;
        color: #111827;
    }

    .sidebar-link.active {
        background-color: #3b82f6;
        color: white;
    }

    .sidebar-link.active .sidebar-icon {
        color: white;
    }

    .sidebar-icon {
        color: #9ca3af;
    }

    .sidebar-link:hover .sidebar-icon {
        color: #6b7280;
    }

    .house-card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .house-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>

<script>
    // Sidebar functionality
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    document.getElementById('closeSidebar').addEventListener('click', closeSidebar);
    document.getElementById('sidebarOverlay').addEventListener('click', closeSidebar);

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const houseCards = document.querySelectorAll('.house-card');

        houseCards.forEach(card => {
            const houseName = card.querySelector('h3').textContent.toLowerCase();
            const houseLocation = card.querySelector('p').textContent.toLowerCase();

            if (houseName.includes(searchTerm) || houseLocation.includes(searchTerm)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
</div>
<x-admin.footer></x-admin.footer>

