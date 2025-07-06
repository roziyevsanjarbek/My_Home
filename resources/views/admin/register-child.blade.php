<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangi Bola Ro'yxatdan O'tkazish - Bolalar Ijara Tizimi</title>
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

                        <a href="register-child.html" class="sidebar-link active group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors">
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
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Yangi Ijarachi Qo'shish</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="tenants-list.html" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            ← Ijarachilar ro'yxatiga qaytish
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
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Yangi Bola Ro'yxatdan O'tkazish</h1>
                    <p class="text-gray-600">Yangi ijarachi bolaning barcha ma'lumotlarini kiriting</p>
                </div>

                <!-- Form -->
                <div class="max-w-4xl mx-auto">
                    <form id="registerChildForm" class="space-y-8">
                        <!-- Personal Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Shaxsiy Ma'lumotlar</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Ism <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="firstName" name="firstName" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Aziza">
                                </div>

                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Familiya <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="lastName" name="lastName" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Karimova">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="birthDate" class="block text-sm font-medium text-gray-700 mb-2">
                                        Tug'ilgan Sana <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" id="birthDate" name="birthDate" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                                        Jinsi <span class="text-red-500">*</span>
                                    </label>
                                    <select id="gender" name="gender" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Jinsni tanlang</option>
                                        <option value="female">Ayol</option>
                                        <option value="male">Erkak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Telefon Raqami <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" id="phone" name="phone" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="+998 90 123 45 67">
                                </div>

                                <div>
                                    <label for="passportSeries" class="block text-sm font-medium text-gray-700 mb-2">
                                        Pasport Seriyasi <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="passportSeries" name="passportSeries" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="AA1234567">
                                </div>
                            </div>
                        </div>

                        <!-- Education Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Ta'lim Ma'lumotlari</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="university" class="block text-sm font-medium text-gray-700 mb-2">
                                        Universitet <span class="text-red-500">*</span>
                                    </label>
                                    <select id="university" name="university" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Universitetni tanlang</option>
                                        <option value="TATU">TATU - Toshkent Axborot Texnologiyalari Universiteti</option>
                                        <option value="NUUz">NUUz - O'zbekiston Milliy Universiteti</option>
                                        <option value="TDTU">TDTU - Toshkent Davlat Texnika Universiteti</option>
                                        <option value="UzMU">UzMU - O'zbekiston Milliy Universiteti</option>
                                        <option value="TIMI">TIMI - Toshkent Irrigatsiya va Melioratsiya Instituti</option>
                                        <option value="other">Boshqa</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="faculty" class="block text-sm font-medium text-gray-700 mb-2">
                                        Fakultet <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="faculty" name="faculty" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Kompyuter injiniringi">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="course" class="block text-sm font-medium text-gray-700 mb-2">
                                        Kurs <span class="text-red-500">*</span>
                                    </label>
                                    <select id="course" name="course" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Kursni tanlang</option>
                                        <option value="1">1-kurs</option>
                                        <option value="2">2-kurs</option>
                                        <option value="3">3-kurs</option>
                                        <option value="4">4-kurs</option>
                                        <option value="5">5-kurs</option>
                                        <option value="magistr">Magistratura</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="studentId" class="block text-sm font-medium text-gray-700 mb-2">
                                        Talaba ID Raqami
                                    </label>
                                    <input type="text" id="studentId" name="studentId"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="ST123456">
                                </div>
                            </div>
                        </div>

                        <!-- Parent Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Ota-ona Ma'lumotlari</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="parentName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Ota-ona Ismi <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="parentName" name="parentName" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="Karim Karimov">
                                </div>

                                <div>
                                    <label for="parentPhone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Ota-ona Telefoni <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" id="parentPhone" name="parentPhone" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="+998 91 234 56 78">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="parentRelation" class="block text-sm font-medium text-gray-700 mb-2">
                                        Qarindoshlik Darajasi <span class="text-red-500">*</span>
                                    </label>
                                    <select id="parentRelation" name="parentRelation" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Qarindoshlikni tanlang</option>
                                        <option value="father">Ota</option>
                                        <option value="mother">Ona</option>
                                        <option value="guardian">Vasiy</option>
                                        <option value="relative">Qarindosh</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="emergencyContact" class="block text-sm font-medium text-gray-700 mb-2">
                                        Favqulodda Holat Uchun Telefon
                                    </label>
                                    <input type="tel" id="emergencyContact" name="emergencyContact"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="+998 99 876 54 32">
                                </div>
                            </div>
                        </div>

                        <!-- Housing Assignment -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Yashash Joyi Tayinlash</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="assignedHouse" class="block text-sm font-medium text-gray-700 mb-2">
                                        Uy <span class="text-red-500">*</span>
                                    </label>
                                    <select id="assignedHouse" name="assignedHouse" required onchange="updateRooms()"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Uyni tanlang</option>
                                        <option value="1">1-uy (Chilonzor tumani)</option>
                                        <option value="2">2-uy (Yunusobod tumani)</option>
                                        <option value="3">3-uy (Mirzo Ulug'bek tumani)</option>
                                        <option value="4">4-uy (Shayxontohur tumani)</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="assignedRoom" class="block text-sm font-medium text-gray-700 mb-2">
                                        Xona <span class="text-red-500">*</span>
                                    </label>
                                    <select id="assignedRoom" name="assignedRoom" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Avval uyni tanlang</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label for="monthlyRent" class="block text-sm font-medium text-gray-700 mb-2">
                                        Oylik Ijara (so'm) <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" id="monthlyRent" name="monthlyRent" required min="100000"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="1250000">
                                </div>

                                <div>
                                    <label for="moveInDate" class="block text-sm font-medium text-gray-700 mb-2">
                                        Kirish Sanasi <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" id="moveInDate" name="moveInDate" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="paymentDay" class="block text-sm font-medium text-gray-700 mb-2">
                                    Oylik To'lov Sanasi <span class="text-red-500">*</span>
                                </label>
                                <select id="paymentDay" name="paymentDay" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">To'lov sanasini tanlang</option>
                                    <option value="1">Har oyning 1-sanasi</option>
                                    <option value="5">Har oyning 5-sanasi</option>
                                    <option value="10">Har oyning 10-sanasi</option>
                                    <option value="15">Har oyning 15-sanasi</option>
                                    <option value="20">Har oyning 20-sanasi</option>
                                    <option value="25">Har oyning 25-sanasi</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Qo'shimcha Ma'lumotlar</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="medicalConditions" class="block text-sm font-medium text-gray-700 mb-2">
                                        Tibbiy Holatlar
                                    </label>
                                    <textarea id="medicalConditions" name="medicalConditions" rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                              placeholder="Allergiya, dorilar yoki boshqa tibbiy ma'lumotlar..."></textarea>
                                </div>

                                <div>
                                    <label for="specialRequests" class="block text-sm font-medium text-gray-700 mb-2">
                                        Maxsus So'rovlar
                                    </label>
                                    <textarea id="specialRequests" name="specialRequests" rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                              placeholder="Maxsus ehtiyojlar yoki so'rovlar..."></textarea>
                                </div>
                            </div>

                            <div class="mt-6">
                                <label class="flex items-center">
                                    <input type="checkbox" name="agreementAccepted" required class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">
                                            Men ijara shartnomasini o'qidim va roziman <span class="text-red-500">*</span>
                                        </span>
                                </label>
                            </div>

                            <div class="mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" name="dataProcessingConsent" required class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">
                                            Shaxsiy ma'lumotlarni qayta ishlashga roziman <span class="text-red-500">*</span>
                                        </span>
                                </label>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end space-x-4">
                            <a href="tenants-list.html" class="px-6 py-3 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                                Bekor qilish
                            </a>
                            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition-colors">
                                Bolani Ro'yxatdan O'tkazish
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

    // Room assignment functionality
    function updateRooms() {
        const houseSelect = document.getElementById('assignedHouse');
        const roomSelect = document.getElementById('assignedRoom');
        const rentInput = document.getElementById('monthlyRent');

        // Clear existing options
        roomSelect.innerHTML = '<option value="">Xonani tanlang</option>';

        const houseId = houseSelect.value;
        if (!houseId) {
            roomSelect.innerHTML = '<option value="">Avval uyni tanlang</option>';
            return;
        }

        // Mock room data - in real app, this would come from API
        const houseRooms = {
            '1': [
                { id: '1-1', name: '1-xona', available: false },
                { id: '1-2', name: '2-xona', available: false },
                { id: '1-3', name: '3-xona', available: true },
                { id: '1-4', name: '4-xona', available: true }
            ],
            '2': [
                { id: '2-1', name: '1-xona', available: false },
                { id: '2-2', name: '2-xona', available: true },
                { id: '2-3', name: '3-xona', available: false },
                { id: '2-4', name: '4-xona', available: true },
                { id: '2-5', name: '5-xona', available: true }
            ],
            '3': [
                { id: '3-1', name: '1-xona', available: true },
                { id: '3-2', name: '2-xona', available: false },
                { id: '3-3', name: '3-xona', available: true }
            ],
            '4': [
                { id: '4-1', name: '1-xona', available: true },
                { id: '4-2', name: '2-xona', available: true },
                { id: '4-3', name: '3-xona', available: true },
                { id: '4-4', name: '4-xona', available: true },
                { id: '4-5', name: '5-xona', available: true },
                { id: '4-6', name: '6-xona', available: true }
            ]
        };

        const rooms = houseRooms[houseId] || [];
        rooms.forEach(room => {
            const option = document.createElement('option');
            option.value = room.id;
            option.textContent = room.name + (room.available ? ' (Bo\'sh)' : ' (Band)');
            option.disabled = !room.available;
            roomSelect.appendChild(option);
        });

        // Set default rent based on house
        const defaultRents = {
            '1': '1250000',
            '2': '1250000',
            '3': '1250000',
            '4': '1500000'
        };
        rentInput.value = defaultRents[houseId] || '1250000';
    }

    // Auto-format phone numbers
    function formatPhoneNumber(input) {
        input.addEventListener('input', function(e) {
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
    }

    // Apply phone formatting to all phone inputs
    formatPhoneNumber(document.getElementById('phone'));
    formatPhoneNumber(document.getElementById('parentPhone'));
    formatPhoneNumber(document.getElementById('emergencyContact'));

    // Form submission
    document.getElementById('registerChildForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const childData = {};

        // Convert form data to object
        for (let [key, value] of formData.entries()) {
            childData[key] = value;
        }

        // Validate required fields
        const requiredFields = ['firstName', 'lastName', 'birthDate', 'gender', 'phone', 'passportSeries',
            'university', 'faculty', 'course', 'parentName', 'parentPhone', 'parentRelation',
            'assignedHouse', 'assignedRoom', 'monthlyRent', 'moveInDate', 'paymentDay'];

        const missingFields = requiredFields.filter(field => !childData[field]);
        if (missingFields.length > 0) {
            alert('Iltimos, barcha majburiy maydonlarni to\'ldiring!');
            return;
        }

        // Check agreements
        if (!childData.agreementAccepted || !childData.dataProcessingConsent) {
            alert('Iltimos, barcha kelishuvlarni tasdiqlang!');
            return;
        }

        // Simulate saving
        console.log('Bola ma\'lumotlari:', childData);

        // Show success message
        alert('Bola muvaffaqiyatli ro\'yxatdan o\'tkazildi!');

        // Redirect to tenants list
        window.location.href = 'tenants-list.html';
    });

    // Set default move-in date to today
    document.getElementById('moveInDate').valueAsDate = new Date();
</script>
</body>
</html>
