<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangi Uy Qo'shish - Bolalar Ijara Tizimi</title>
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
                        <a href="houses-list.html" class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
                            <svg class="sidebar-icon mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h3M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Uylar ro'yxati
                        </a>

                        <a href="add-house.html" class="sidebar-link active group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
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
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Yangi Uy Qo'shish</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="houses-list.html" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            ← Uylar ro'yxatiga qaytish
                        </a>
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
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Yangi Uy Qo'shish</h1>
                    <p class="text-gray-600">Ijara uchun yangi uy ma'lumotlarini kiriting</p>
                </div>

                <!-- Form -->
                <div class="max-w-4xl mx-auto">
                    <form id="addHouseForm" class="space-y-8">
                        <!-- Basic Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Asosiy Ma'lumotlar</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="houseName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy Nomi <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="houseName" name="houseName" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Masalan: 1-uy">
                                </div>

                                <div>
                                    <label for="houseType" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy Turi <span class="text-red-500">*</span>
                                    </label>
                                    <select id="houseType" name="houseType" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Uy turini tanlang</option>
                                        <option value="hovli_uy">Hovli uy</option>
                                        <option value="kvartira">Kvartira</option>
                                        <option value="villa">Villa</option>
                                        <option value="townhouse">Townhouse</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Tavsif
                                </label>
                                <textarea id="description" name="description" rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="Uy haqida qo'shimcha ma'lumotlar..."></textarea>
                            </div>
                        </div>

                        <!-- Address Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Manzil Ma'lumotlari</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="district" class="block text-sm font-medium text-gray-700 mb-2">
                                        Tuman <span class="text-red-500">*</span>
                                    </label>
                                    <select id="district" name="district" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Tumanni tanlang</option>
                                        <option value="chilonzor">Chilonzor</option>
                                        <option value="yunusobod">Yunusobod</option>
                                        <option value="mirzo_ulugbek">Mirzo Ulug'bek</option>
                                        <option value="shayxontohur">Shayxontohur</option>
                                        <option value="bektemir">Bektemir</option>
                                        <option value="sergeli">Sergeli</option>
                                        <option value="olmazor">Olmazor</option>
                                        <option value="mirobod">Mirobod</option>
                                        <option value="yakkasaroy">Yakkasaroy</option>
                                        <option value="uchtepa">Uchtepa</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="street" class="block text-sm font-medium text-gray-700 mb-2">
                                        Ko'cha <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="street" name="street" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Ko'cha nomini kiriting">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="houseNumber" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy Raqami <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="houseNumber" name="houseNumber" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="123">
                                </div>

                                <div>
                                    <label for="landmark" class="block text-sm font-medium text-gray-700 mb-2">
                                        Mo'ljal
                                    </label>
                                    <input type="text" id="landmark" name="landmark"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Metro, maktab yoki boshqa mo'ljal">
                                </div>
                            </div>
                        </div>

                        <!-- Room Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Xonalar Ma'lumotlari</h3>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="totalRooms" class="block text-sm font-medium text-gray-700 mb-2">
                                        Jami Xonalar Soni <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" id="totalRooms" name="totalRooms" required min="1" max="20"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="4">
                                </div>

                                <div>
                                    <label for="bathrooms" class="block text-sm font-medium text-gray-700 mb-2">
                                        Hammomlar Soni
                                    </label>
                                    <input type="number" id="bathrooms" name="bathrooms" min="1" max="10"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="2">
                                </div>

                                <div>
                                    <label for="kitchens" class="block text-sm font-medium text-gray-700 mb-2">
                                        Oshxonalar Soni
                                    </label>
                                    <input type="number" id="kitchens" name="kitchens" min="1" max="5"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="1">
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="roomPrices" class="block text-sm font-medium text-gray-700 mb-2">
                                    Har Bir Xona Narxi (so'm) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="roomPrices" name="roomPrices" required min="100000"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="1250000">
                                <p class="mt-1 text-sm text-gray-500">Har bir xona uchun oylik ijara narxi</p>
                            </div>
                        </div>

                        <!-- Amenities -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Qulayliklar</h3>

                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="wifi" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Wi-Fi</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="parking" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Avtomobil joyi</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="washing_machine" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Kir yuvish mashinasi</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="air_conditioning" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Konditsioner</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="heating" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Isitish tizimi</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="garden" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Bog'</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="security" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Xavfsizlik</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="amenities" value="furnished" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Mebelli</span>
                                </label>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Aloqa Ma'lumotlari</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="ownerName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy Egasi Ismi
                                    </label>
                                    <input type="text" id="ownerName" name="ownerName"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Ism Familiya">
                                </div>

                                <div>
                                    <label for="ownerPhone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy Egasi Telefoni
                                    </label>
                                    <input type="tel" id="ownerPhone" name="ownerPhone"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="+998 90 123 45 67">
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end space-x-4">
                            <a href="houses-list.html" class="px-6 py-3 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                                Bekor qilish
                            </a>
                            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition-colors">
                                Uyni Saqlash
                            </button>
                        </div>
                    </form>
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

    // Form submission
    document.getElementById('addHouseForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const houseData = {};

        // Convert form data to object
        for (let [key, value] of formData.entries()) {
            if (key === 'amenities') {
                if (!houseData.amenities) houseData.amenities = [];
                houseData.amenities.push(value);
            } else {
                houseData[key] = value;
            }
        }

        // Simulate saving
        console.log('Uy ma\'lumotlari:', houseData);

        // Show success message
        alert('Uy muvaffaqiyatli qo\'shildi!');

        // Redirect to houses list
        window.location.href = 'houses-list.html';
    });

    // Auto-format phone number
    document.getElementById('ownerPhone').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.startsWith('998')) {
            value = value.substring(3);
        }
        if (value.length > 0) {
            if (value.length <= 2) {
                value = `+998 ${value}`;
            } else if (value.length <= 5) {
                value = `+998 ${value.substring(0, 2)} ${value.substring(2)}`;
            } else if (value.length <= 7) {
                value = `+998 ${value.substring(0, 2)} ${value.substring(2, 5)} ${value.substring(5)}`;
            } else {
                value = `+998 ${value.substring(0, 2)} ${value.substring(2, 5)} ${value.substring(5, 7)} ${value.substring(7, 9)}`;
            }
        }
        e.target.value = value;
    });
</script>
</body>
</html>
