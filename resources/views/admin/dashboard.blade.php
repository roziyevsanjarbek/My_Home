<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolalar Ijara Boshqaruv Paneli</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#6b7280',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
<div class="flex h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-between h-16 px-6 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Bolalar Ijara</h2>
            <button id="closeSidebar" class="lg:hidden text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <nav class="mt-6 px-3">
            <div class="space-y-1">
                <!-- Dashboard -->
                <a href="index.html" class="sidebar-link active group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                    <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    Bosh sahifa
                </a>

                <!-- Tenants Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Ijarachilar</h3>
                    <div class="mt-2 space-y-1">
                        <a href="tenants-list.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            Ijarachilar ro'yxati
                        </a>

                        <a href="register-child.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                            Yangi ijarachi
                        </a>
                    </div>
                </div>

                <!-- Houses Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Uylar</h3>
                    <div class="mt-2 space-y-1">
                        <a href="houses-list.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h3M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Uylar ro'yxati
                        </a>

                        <a href="add-house.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Yangi uy qo'shish
                        </a>
                    </div>
                </div>

                <!-- Payments Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">To'lovlar</h3>
                    <div class="mt-2 space-y-1">
                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            To'lovlar tarixi
                        </a>

                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Kechikkan to'lovlar
                        </a>
                    </div>
                </div>

                <!-- Reports Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Hisobotlar</h3>
                    <div class="mt-2 space-y-1">
                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Moliyaviy hisobot
                        </a>

                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Bandlik hisoboti
                        </a>
                    </div>
                </div>

                <!-- Settings Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Sozlamalar</h3>
                    <div class="mt-2 space-y-1">
                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Sozlamalar
                        </a>

                        <a href="#" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Profil
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 z-40 lg:hidden hidden"></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
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
</body>
</html>
