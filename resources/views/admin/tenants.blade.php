<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ijarachilar Ro'yxati - Bolalar Ijara Tizimi</title>
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
                <a href="index.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
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
                        <a href="tenants-list.html" class="sidebar-link active group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
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
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Ijarachilar Ro'yxati</h2>
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
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Ijarachilar Ro'yxati</h1>
                            <p class="text-gray-600">Barcha ijarachi bolalarni boshqaring va kuzating</p>
                        </div>
                        <a href="register-child.html" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium transition-colors flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Yangi Bola Qo'shish
                        </a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami Ijarachilar</span>
                            <span class="text-gray-400">👥</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">15</div>
                        <div class="text-xs text-green-600">Bu oyda +2 yangi</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">To'lagan Bolalar</span>
                            <span class="text-gray-400">✅</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">12</div>
                        <div class="text-xs text-green-600">80% to'lov darajasi</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Kechikkanlar</span>
                            <span class="text-gray-400">⚠️</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">2</div>
                        <div class="text-xs text-red-600">Eslatma yuborish kerak</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Kutilayotganlar</span>
                            <span class="text-gray-400">⏳</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">1</div>
                        <div class="text-xs text-yellow-600">Bu hafta to'lashi kerak</div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
                    <div class="flex flex-wrap gap-4">
                        <select class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha uylar</option>
                            <option value="1">1-uy</option>
                            <option value="2">2-uy</option>
                            <option value="3">3-uy</option>
                            <option value="4">4-uy</option>
                        </select>

                        <select class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha holatlar</option>
                            <option value="paid">To'langan</option>
                            <option value="pending">Kutilayotgan</option>
                            <option value="overdue">Kechikkan</option>
                        </select>

                        <select class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha universitetlar</option>
                            <option value="TATU">TATU</option>
                            <option value="NUUz">NUUz</option>
                            <option value="TDTU">TDTU</option>
                            <option value="UzMU">UzMU</option>
                            <option value="TIMI">TIMI</option>
                        </select>

                        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm font-medium hover:bg-gray-200 transition-colors">
                            Filtrlarni tozalash
                        </button>
                    </div>
                </div>

                <!-- Tenants Table -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Ijarachilar</h3>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bola</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uy/Xona</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Universitet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Oylik to'lov</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keyingi to'lov</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Holati</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amallar</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="tenantsTableBody">
                            <!-- Tenant 1 -->
                            <tr class="hover:bg-gray-50 tenant-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-blue-600">AK</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Aziza Karimova</div>
                                            <div class="text-sm text-gray-500">19 yosh • 2-kurs</div>
                                            <div class="text-xs text-gray-400">Tel: +998 90 123 45 67</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1-uy</div>
                                    <div class="text-sm text-gray-500">2-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">TATU</div>
                                    <div class="text-sm text-gray-500">Kompyuter injiniringi</div>
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
                                        <button class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Tenant 2 -->
                            <tr class="hover:bg-gray-50 tenant-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-green-600">MR</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Malika Rahimova</div>
                                            <div class="text-sm text-gray-500">20 yosh • 3-kurs</div>
                                            <div class="text-xs text-gray-400">Tel: +998 91 234 56 78</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2-uy</div>
                                    <div class="text-sm text-gray-500">1-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">NUUz</div>
                                    <div class="text-sm text-gray-500">Iqtisodiyot</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-10</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Tenant 3 -->
                            <tr class="hover:bg-gray-50 tenant-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-purple-600">DT</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Dilshod Toshmatov</div>
                                            <div class="text-sm text-gray-500">21 yosh • 4-kurs</div>
                                            <div class="text-xs text-gray-400">Tel: +998 93 345 67 89</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">4-uy</div>
                                    <div class="text-sm text-gray-500">3-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">TDTU</div>
                                    <div class="text-sm text-gray-500">Qurilish</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,500,000 so'm</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-20</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Kutilayotgan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Tenant 4 -->
                            <tr class="hover:bg-gray-50 tenant-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-red-600">SA</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Sevara Abdullayeva</div>
                                            <div class="text-sm text-gray-500">18 yosh • 1-kurs</div>
                                            <div class="text-xs text-gray-400">Tel: +998 94 456 78 90</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1-uy</div>
                                    <div class="text-sm text-gray-500">4-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">UzMU</div>
                                    <div class="text-sm text-gray-500">Filologiya</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-25</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Kechikkan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- More tenants... -->
                            <tr class="hover:bg-gray-50 tenant-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-indigo-600">FN</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Farrux Nazarov</div>
                                            <div class="text-sm text-gray-500">22 yosh • Magistr</div>
                                            <div class="text-xs text-gray-400">Tel: +998 95 567 89 01</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">3-uy</div>
                                    <div class="text-sm text-gray-500">1-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">TIMI</div>
                                    <div class="text-sm text-gray-500">Gidrotexnika</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-05</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Oldingi
                            </button>
                            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Keyingi
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Ko'rsatilmoqda <span class="font-medium">1</span> dan <span class="font-medium">5</span> gacha, jami <span class="font-medium">15</span> ta natija
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Oldingi</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</button>
                                    <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</button>
                                    <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</button>
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Keyingi</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </nav>
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
</script>
</body>
</html>


