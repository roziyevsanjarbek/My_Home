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
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Bolalar Ijara Boshqaruv Paneli</h1>
                    <p class="text-gray-600">Har bir bolaning to'lovlarini va yashash holatini kuzating</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami Bolalar</span>
                            <span class="text-gray-400">👥</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">15</div>
                        <div class="text-xs text-green-600">Bu oyda +2 yangi bola</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Bu Oylik Daromad</span>
                            <span class="text-gray-400">💰</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">18,750,000 so'm</div>
                        <div class="text-xs text-green-600">O'tgan oydan +8%</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Faol Uylar</span>
                            <span class="text-gray-400">🏠</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">4</div>
                        <div class="text-xs text-green-600">Barcha uylar band</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">To'lov Kutilayotganlar</span>
                            <span class="text-gray-400">📅</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">3</div>
                        <div class="text-xs text-yellow-600">Bu hafta to'lashi kerak</div>
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    <!-- Tenants Table -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold text-gray-900">Bolalar Ro'yxati va To'lovlar</h3>
                                <a href="register-child.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                    Yangi Bola Qo'shish
                                </a>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bola</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uy/Xona</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Oylik to'lov</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keyingi to'lov</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Holati</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amallar</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="tenantsTableBody">
                                <tr class="hover:bg-gray-50 tenant-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-col">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Aziza Karimova</div>
                                            <div class="text-sm text-gray-500">19 yosh • TATU</div>
                                            <div class="text-xs text-gray-400">Tel: +998 90 123 45 67</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">1-uy</div>
                                        <div class="text-sm text-gray-500">2-xona</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-15</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-400 hover:text-gray-600 p-1 rounded">📞</button>
                                            <button class="text-gray-400 hover:text-gray-600 p-1 rounded">💬</button>
                                            <button class="text-gray-400 hover:text-gray-600 p-1 rounded">⋯</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                        <div class="p-4 border-t border-gray-200">
                            <a href="tenants-list.html" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                Barcha ijarachilarni ko'rish →
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Payment Overview -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">To'lovlar Umumiy Ko'rinishi</h3>

                            <div class="mb-6">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm text-gray-600">To'lov Yig'ish Darajasi</span>
                                    <span class="text-sm font-medium text-gray-900">87%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 87%" id="progressBar"></div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-6">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Vaqtida to'laganlar</span>
                                    <span class="text-sm font-medium text-green-600">12 bola</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Kechikkanlar</span>
                                    <span class="text-sm font-medium text-red-600">2 bola</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Kutilayotganlar</span>
                                    <span class="text-sm font-medium text-yellow-600">1 bola</span>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-gray-200 text-center">
                                <div class="text-2xl font-bold text-gray-900">18,750,000</div>
                                <div class="text-sm text-gray-600">Bu oylik jami daromad (so'm)</div>
                            </div>
                        </div>

                        <!-- Recent Payments -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">So'nggi To'lovlar</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                        <span class="text-sm">✅</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-900">To'lov Qabul Qilindi</p>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Muvaffaq</span>
                                        </div>
                                        <p class="text-sm text-gray-600">Aziza Karimova - 1,250,000 so'm</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs text-gray-500">🕐 2 soat oldin</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- More activity items... -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Houses Overview -->
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Uylar Umumiy Ko'rinishi</h3>
                        <a href="houses-list.html" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                            Barcha uylarni ko'rish →
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- House cards... -->
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
</style>

<script>
    // Sidebar functionality
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }

    // Close sidebar
    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    // Event listeners
    document.getElementById('closeSidebar').addEventListener('click', closeSidebar);
    document.getElementById('sidebarOverlay').addEventListener('click', closeSidebar);

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('.tenant-row');

        tableRows.forEach(row => {
            const tenantName = row.querySelector('.tenant-name').textContent.toLowerCase();
            if (tenantName.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Progress bar animation
    window.addEventListener('load', function() {
        const progressBar = document.getElementById('progressBar');
        progressBar.style.width = '0%';
        setTimeout(() => {
            progressBar.style.width = '87%';
        }, 500);
    });
</script>
</div>
