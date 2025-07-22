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
        <header class="bg-white border-b border-gray-200 shadow-sm">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <button onclick="toggleSidebar()" class="lg:hidden text-gray-500 hover:text-gray-700 p-2 rounded-md transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">Kechikkan To'lovlar</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                            <input type="text" id="searchInput" class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Kechikkan to'lovlarni qidirish...">
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
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Kechikkan To'lovlar</h1>
                            <p class="text-gray-600">Muddati o'tgan to'lovlarni kuzating va eslatmalar yuboring</p>
                        </div>
                        <div class="flex space-x-3">
                            <button onclick="sendBulkReminders()" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md font-medium transition-colors flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                                Ommaviy Eslatma
                            </button>
                            <button onclick="exportOverdue()" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition-colors flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Eksport
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Alert Banner -->
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Diqqat! Kechikkan To'lovlar Mavjud</h3>
                            <div class="mt-2 text-sm text-red-700">
                                <p>Hozirda <strong>8 ta</strong> kechikkan to'lov mavjud. Jami qarz miqdori: <strong>9,750,000 so'm</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami Kechikkan</span>
                            <span class="text-red-500">⚠️</span>
                        </div>
                        <div class="text-2xl font-bold text-red-600 mb-1">8</div>
                        <div class="text-xs text-red-600">to'lov kechikkan</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami Qarz</span>
                            <span class="text-red-500">💰</span>
                        </div>
                        <div class="text-2xl font-bold text-red-600 mb-1">9,750,000</div>
                        <div class="text-xs text-red-600">so'm</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">O'rtacha Kechikish</span>
                            <span class="text-orange-500">📅</span>
                        </div>
                        <div class="text-2xl font-bold text-orange-600 mb-1">12</div>
                        <div class="text-xs text-orange-600">kun</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Eng Uzoq Kechikish</span>
                            <span class="text-red-500">⏰</span>
                        </div>
                        <div class="text-2xl font-bold text-red-600 mb-1">45</div>
                        <div class="text-xs text-red-600">kun</div>
                    </div>
                </div>



                <!-- Filters -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
                    <div class="flex flex-wrap gap-4 items-center">
                        <select id="overdueFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha kechikishlar</option>
                            <option value="1-7">1-7 kun</option>
                            <option value="8-15">8-15 kun</option>
                            <option value="16-30">16-30 kun</option>
                            <option value="30+">30+ kun</option>
                        </select>

                        <select id="houseFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha uylar</option>
                            <option value="1">1-uy</option>
                            <option value="2">2-uy</option>
                            <option value="3">3-uy</option>
                            <option value="4">4-uy</option>
                        </select>

                        <select id="amountFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha summalar</option>
                            <option value="low">1,000,000 gacha</option>
                            <option value="medium">1,000,000 - 2,000,000</option>
                            <option value="high">2,000,000 dan yuqori</option>
                        </select>

                        <button onclick="applyFilters()" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
                            Filtrlarni Qo'llash
                        </button>

                        <button onclick="clearFilters()" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm font-medium hover:bg-gray-200 transition-colors">
                            Tozalash
                        </button>
                    </div>
                </div>

                <!-- Overdue Payments Table -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-900">Kechikkan To'lovlar Ro'yxati</h3>
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="selectAll" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <label for="selectAll" class="text-sm text-gray-700">Barchasini tanlash</label>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanlash</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ijarachi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uy/Xona</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qarz Miqdori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Muddat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kechikish</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Oxirgi Aloqa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amallar</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="overdueTableBody">
                            <!-- Overdue Payment 1 - Critical -->
                            <tr class="hover:bg-red-50 overdue-row bg-red-25">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 payment-checkbox" data-payment-id="OVD-001">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-red-600">SA</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Sevara Abdullayeva</div>
                                            <div class="text-sm text-gray-500">+998 94 456 78 90</div>
                                            <div class="text-xs text-red-600">⚠️ Kritik holat</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1-uy</div>
                                    <div class="text-sm text-gray-500">4-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-red-600">2,500,000 so'm</div>
                                    <div class="text-sm text-gray-500">2 oylik qarz</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2023-12-25</div>
                                    <div class="text-xs text-red-600">Dekabr oyi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-bold text-red-600">45 kun</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-10</div>
                                    <div class="text-xs">SMS yuborilgan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="callTenant('SA')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button onclick="sendUrgentReminder('OVD-001')" class="text-red-600 hover:text-red-900 p-1 rounded" title="Shoshilinch eslatma">🚨</button>
                                        <button onclick="sendSMS('OVD-001')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button onclick="viewDetails('OVD-001')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Tafsilotlar">👁️</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Overdue Payment 2 - High Priority -->
                            <tr class="hover:bg-orange-50 overdue-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 payment-checkbox" data-payment-id="OVD-002">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-orange-600">DT</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Dilshod Toshmatov</div>
                                            <div class="text-sm text-gray-500">+998 93 345 67 89</div>
                                            <div class="text-xs text-orange-600">⚠️ Yuqori ustuvorlik</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">4-uy</div>
                                    <div class="text-sm text-gray-500">3-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-orange-600">750,000 so'm</div>
                                    <div class="text-sm text-gray-500">Qisman qarz</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-20</div>
                                    <div class="text-xs text-orange-600">Yanvar oyi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-bold text-orange-600">22 kun</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-25</div>
                                    <div class="text-xs">Qo'ng'iroq qilingan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="callTenant('DT')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button onclick="sendReminder('OVD-002')" class="text-orange-600 hover:text-orange-900 p-1 rounded" title="Eslatma">📢</button>
                                        <button onclick="sendSMS('OVD-002')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button onclick="viewDetails('OVD-002')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Tafsilotlar">👁️</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Overdue Payment 3 - Medium Priority -->
                            <tr class="hover:bg-yellow-50 overdue-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 payment-checkbox" data-payment-id="OVD-003">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-yellow-600">MU</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Murod Umarov</div>
                                            <div class="text-sm text-gray-500">+998 95 123 45 67</div>
                                            <div class="text-xs text-yellow-600">⚠️ O'rta ustuvorlik</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2-uy</div>
                                    <div class="text-sm text-gray-500">2-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-yellow-600">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-15</div>
                                    <div class="text-xs text-yellow-600">Yanvar oyi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-bold text-yellow-600">15 kun</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-28</div>
                                    <div class="text-xs">SMS yuborilgan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="callTenant('MU')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button onclick="sendReminder('OVD-003')" class="text-orange-600 hover:text-orange-900 p-1 rounded" title="Eslatma">📢</button>
                                        <button onclick="sendSMS('OVD-003')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button onclick="viewDetails('OVD-003')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Tafsilotlar">👁️</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Overdue Payment 4 - Recent -->
                            <tr class="hover:bg-gray-50 overdue-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 payment-checkbox" data-payment-id="OVD-004">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-gray-600">NK</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Nodira Karimova</div>
                                            <div class="text-sm text-gray-500">+998 97 678 90 12</div>
                                            <div class="text-xs text-gray-600">⚠️ Yangi kechikish</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2-uy</div>
                                    <div class="text-sm text-gray-500">3-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-gray-600">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-02-05</div>
                                    <div class="text-xs text-gray-600">Fevral oyi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-gray-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-bold text-gray-600">5 kun</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>-</div>
                                    <div class="text-xs">Hali aloqa qilinmagan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="callTenant('NK')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button onclick="sendReminder('OVD-004')" class="text-orange-600 hover:text-orange-900 p-1 rounded" title="Eslatma">📢</button>
                                        <button onclick="sendSMS('OVD-004')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button onclick="viewDetails('OVD-004')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Tafsilotlar">👁️</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- More overdue payments... -->
                            <tr class="hover:bg-red-50 overdue-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 payment-checkbox" data-payment-id="OVD-005">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center">
                                                <span class="text-sm font-medium text-red-600">AS</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Akmal Saidov</div>
                                            <div class="text-sm text-gray-500">+998 99 876 54 32</div>
                                            <div class="text-xs text-red-600">⚠️ Kritik holat</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">3-uy</div>
                                    <div class="text-sm text-gray-500">1-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-red-600">1,875,000 so'm</div>
                                    <div class="text-sm text-gray-500">1.5 oylik qarz</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-05</div>
                                    <div class="text-xs text-red-600">Yanvar oyi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-bold text-red-600">35 kun</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-30</div>
                                    <div class="text-xs">Qo'ng'iroq qilingan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="callTenant('AS')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button onclick="sendUrgentReminder('OVD-005')" class="text-red-600 hover:text-red-900 p-1 rounded" title="Shoshilinch eslatma">🚨</button>
                                        <button onclick="sendSMS('OVD-005')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS">💬</button>
                                        <button onclick="viewDetails('OVD-005')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Tafsilotlar">👁️</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Bulk Actions -->
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-700">
                                <span id="selectedCount">0</span> ta tanlangan
                            </div>
                            <div class="flex space-x-2">
                                <button onclick="bulkSendSMS()" class="px-3 py-1 bg-purple-600 text-white rounded text-sm hover:bg-purple-700 transition-colors disabled:opacity-50" disabled id="bulkSMSBtn">
                                    SMS Yuborish
                                </button>
                                <button onclick="bulkCall()" class="px-3 py-1 bg-green-600 text-white rounded text-sm hover:bg-green-700 transition-colors disabled:opacity-50" disabled id="bulkCallBtn">
                                    Qo'ng'iroq
                                </button>
                                <button onclick="bulkReminder()" class="px-3 py-1 bg-orange-600 text-white rounded text-sm hover:bg-orange-700 transition-colors disabled:opacity-50" disabled id="bulkReminderBtn">
                                    Eslatma
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Payment Details Modal -->
<div id="overdueModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Kechikkan To'lov Tafsilotlari</h3>
                <button onclick="closeOverdueModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div id="overdueDetails" class="space-y-4">
                <!-- Overdue details will be loaded here -->
            </div>

            <div class="flex justify-end space-x-3 mt-6">
                <button onclick="closeOverdueModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                    Yopish
                </button>
                <button onclick="sendUrgentReminder()" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                    Shoshilinch Eslatma
                </button>
            </div>
        </div>
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

    .overdue-row {
        transition: background-color 0.2s ease-in-out;
    }

    .bg-red-25 {
        background-color: #fef2f2;
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
        const overdueRows = document.querySelectorAll('.overdue-row');

        overdueRows.forEach(row => {
            const tenantName = row.querySelector('.tenant-name').textContent.toLowerCase();
            if (tenantName.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Checkbox functionality
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.payment-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateSelectedCount();
    });

    // Individual checkbox change
    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('payment-checkbox')) {
            updateSelectedCount();
        }
    });

    function updateSelectedCount() {
        const selectedCheckboxes = document.querySelectorAll('.payment-checkbox:checked');
        const count = selectedCheckboxes.length;
        document.getElementById('selectedCount').textContent = count;

        // Enable/disable bulk action buttons
        const bulkButtons = ['bulkSMSBtn', 'bulkCallBtn', 'bulkReminderBtn'];
        bulkButtons.forEach(btnId => {
            const btn = document.getElementById(btnId);
            btn.disabled = count === 0;
        });
    }

    // Filter functionality
    function applyFilters() {
        const overdueFilter = document.getElementById('overdueFilter').value;
        const houseFilter = document.getElementById('houseFilter').value;
        const amountFilter = document.getElementById('amountFilter').value;

        console.log('Filters applied:', {
            overdueFilter,
            houseFilter,
            amountFilter
        });

        alert('Filtrlar qo\'llandi! (Bu demo versiyada haqiqiy filtrlash amalga oshirilmaydi)');
    }

    function clearFilters() {
        document.getElementById('overdueFilter').value = '';
        document.getElementById('houseFilter').value = '';
        document.getElementById('amountFilter').value = '';

        // Show all rows
        const overdueRows = document.querySelectorAll('.overdue-row');
        overdueRows.forEach(row => {
            row.style.display = '';
        });
    }

    // Action functions
    function callTenant(tenantId) {
        console.log('Calling tenant:', tenantId);
        alert(`${tenantId} ijarachisiga qo'ng'iroq qilinmoqda...`);
    }

    function sendReminder(paymentId) {
        console.log('Sending reminder for:', paymentId);
        alert(`${paymentId} uchun eslatma yuborilmoqda...`);
    }

    function sendUrgentReminder(paymentId) {
        console.log('Sending urgent reminder for:', paymentId);
        alert(`${paymentId} uchun SHOSHILINCH eslatma yuborilmoqda!`);
    }

    function sendSMS(paymentId) {
        console.log('Sending SMS for:', paymentId);
        alert(`${paymentId} uchun SMS yuborilmoqda...`);
    }

    function viewDetails(paymentId) {
        // Sample overdue payment data
        const overdueData = {
            'OVD-001': {
                id: 'OVD-001',
                tenant: 'Sevara Abdullayeva',
                phone: '+998 94 456 78 90',
                house: '1-uy',
                room: '4-xona',
                amount: '2,500,000 so\'m',
                dueDate: '2023-12-25',
                overdueDays: 45,
                status: 'Kritik',
                lastContact: '2024-01-10',
                contactType: 'SMS',
                description: 'Dekabr va Yanvar oylari uchun to\'lov kechikkan'
            }
        };

        const overdue = overdueData[paymentId] || {
            id: paymentId,
            tenant: 'Ma\'lumot topilmadi',
            phone: '-',
            house: '-',
            room: '-',
            amount: '-',
            dueDate: '-',
            overdueDays: '-',
            status: '-',
            lastContact: '-',
            contactType: '-',
            description: '-'
        };

        const detailsHtml = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">To'lov ID</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.id}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ijarachi</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.tenant}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Telefon</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.phone}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Uy/Xona</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.house} - ${overdue.room}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Qarz Miqdori</label>
                        <p class="mt-1 text-sm text-red-600 font-semibold">${overdue.amount}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Muddat</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.dueDate}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kechikish</label>
                        <p class="mt-1 text-sm text-red-600 font-bold">${overdue.overdueDays} kun</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Holati</label>
                        <p class="mt-1 text-sm text-red-600">${overdue.status}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Oxirgi Aloqa</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.lastContact} (${overdue.contactType})</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Izoh</label>
                        <p class="mt-1 text-sm text-gray-900">${overdue.description}</p>
                    </div>
                </div>
            `;

        document.getElementById('overdueDetails').innerHTML = detailsHtml;
        document.getElementById('overdueModal').classList.remove('hidden');
    }

    function closeOverdueModal() {
        document.getElementById('overdueModal').classList.add('hidden');
    }

    // Bulk actions
    function bulkSendSMS() {
        const selectedCheckboxes = document.querySelectorAll('.payment-checkbox:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(cb => cb.dataset.paymentId);
        console.log('Sending bulk SMS to:', selectedIds);
        alert(`${selectedIds.length} ta ijarachiga SMS yuborilmoqda...`);
    }

    function bulkCall() {
        const selectedCheckboxes = document.querySelectorAll('.payment-checkbox:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(cb => cb.dataset.paymentId);
        console.log('Bulk calling:', selectedIds);
        alert(`${selectedIds.length} ta ijarachiga qo'ng'iroq qilinmoqda...`);
    }

    function bulkReminder() {
        const selectedCheckboxes = document.querySelectorAll('.payment-checkbox:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(cb => cb.dataset.paymentId);
        console.log('Sending bulk reminders to:', selectedIds);
        alert(`${selectedIds.length} ta ijarachiga eslatma yuborilmoqda...`);
    }

    // Priority actions
    function sendBulkReminders() {
        console.log('Sending bulk reminders to all overdue tenants');
        alert('Barcha kechikkan ijarachilarga eslatma yuborilmoqda...');
    }

    function sendAllReminders() {
        console.log('Sending reminders to all overdue tenants');
        alert('Barcha kechikkan ijarachilarga eslatma yuborilmoqda...');
    }

    function callAllOverdue() {
        console.log('Calling all overdue tenants');
        alert('Barcha kechikkan ijarachilarga qo\'ng\'iroq qilinmoqda...');
    }

    function generateOverdueReport() {
        console.log('Generating overdue payments report');
        alert('Kechikkan to\'lovlar hisoboti yaratilmoqda...');
    }

    function exportOverdue() {
        console.log('Exporting overdue payments data');
        alert('Kechikkan to\'lovlar ma\'lumotlari eksport qilinmoqda...');
    }

    // Close modal when clicking outside
    document.getElementById('overdueModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeOverdueModal();
        }
    });

    // Auto-refresh data every 60 seconds (in a real application)
    setInterval(function() {
        console.log('Auto-refreshing overdue payments data...');
    }, 60000);

    // Initialize page
    window.addEventListener('load', function() {
        updateSelectedCount();
    });
</script>
</div>
<x-admin.footer></x-admin.footer>
