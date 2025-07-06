<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uylar Ro'yxati - Bolalar Ijara Tizimi</title>
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
                        <a href="houses-list.html" class="sidebar-link active group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
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
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Uylar Ro'yxati</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                            <input type="text" id="searchInput" class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Uylarni qidirish...">
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
</body>
</html>
