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
                        <h2 class="ml-2 lg:ml-0 text-xl font-semibold text-gray-900">To'lovlar Tarixi</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                            <input type="text" id="searchInput" class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="To'lovlarni qidirish...">
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
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">To'lovlar Tarixi</h1>
                            <p class="text-gray-600">Barcha to'lovlarni kuzating va boshqaring</p>
                        </div>
                        <div class="flex space-x-3">
                            <button onclick="exportPayments()" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition-colors flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Eksport
                            </button>
                            <button onclick="addPayment()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition-colors flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                To'lov Qo'shish
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Bu Oylik Daromad</span>
                            <span class="text-gray-400">💰</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">18,750,000</div>
                        <div class="text-xs text-green-600">+12% o'tgan oyga nisbatan</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Jami To'lovlar</span>
                            <span class="text-gray-400">📊</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">47</div>
                        <div class="text-xs text-blue-600">Bu oyda</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">O'rtacha To'lov</span>
                            <span class="text-gray-400">📈</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">1,312,500</div>
                        <div class="text-xs text-gray-600">so'm</div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-medium text-gray-600">Kechikkan To'lovlar</span>
                            <span class="text-gray-400">⚠️</span>
                        </div>
                        <div class="text-2xl font-bold text-gray-900 mb-1">3</div>
                        <div class="text-xs text-red-600">Eslatma yuborish kerak</div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
                    <div class="flex flex-wrap gap-4 items-center">
                        <div class="flex items-center space-x-2">
                            <label class="text-sm font-medium text-gray-700">Sana oralig'i:</label>
                            <input type="date" id="startDate" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <span class="text-gray-500">-</span>
                            <input type="date" id="endDate" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <select id="houseFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha uylar</option>
                            <option value="1">1-uy</option>
                            <option value="2">2-uy</option>
                            <option value="3">3-uy</option>
                            <option value="4">4-uy</option>
                        </select>

                        <select id="statusFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha holatlar</option>
                            <option value="completed">To'langan</option>
                            <option value="pending">Kutilayotgan</option>
                            <option value="overdue">Kechikkan</option>
                            <option value="partial">Qisman</option>
                        </select>

                        <select id="methodFilter" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Barcha usullar</option>
                            <option value="cash">Naqd</option>
                            <option value="card">Karta</option>
                            <option value="transfer">O'tkazma</option>
                            <option value="click">Click</option>
                            <option value="payme">Payme</option>
                        </select>

                        <button onclick="applyFilters()" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
                            Filtrlarni Qo'llash
                        </button>

                        <button onclick="clearFilters()" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm font-medium hover:bg-gray-200 transition-colors">
                            Tozalash
                        </button>
                    </div>
                </div>

                <!-- Payments Table -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">To'lovlar Ro'yxati</h3>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ijarachi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uy/Xona</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">To'lov Usuli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sana</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Holati</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amallar</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="paymentsTableBody">
                            <!-- Payment 1 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-001</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-blue-600">AK</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Aziza Karimova</div>
                                            <div class="text-sm text-gray-500">+998 90 123 45 67</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1-uy</div>
                                    <div class="text-sm text-gray-500">2-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-blue-600 mr-2">💳</span>
                                        <span class="text-sm text-gray-900">Karta</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-15</div>
                                    <div class="text-xs">14:30</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-001')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="printReceipt('PAY-001')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Chek chop etish">🖨️</button>
                                        <button onclick="sendReceipt('PAY-001')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS yuborish">📱</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Payment 2 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-002</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-green-600">MR</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Malika Rahimova</div>
                                            <div class="text-sm text-gray-500">+998 91 234 56 78</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2-uy</div>
                                    <div class="text-sm text-gray-500">1-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-green-600 mr-2">💵</span>
                                        <span class="text-sm text-gray-900">Naqd</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-14</div>
                                    <div class="text-xs">10:15</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-002')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="printReceipt('PAY-002')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Chek chop etish">🖨️</button>
                                        <button onclick="sendReceipt('PAY-002')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS yuborish">📱</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Payment 3 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-003</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-purple-600">DT</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Dilshod Toshmatov</div>
                                            <div class="text-sm text-gray-500">+998 93 345 67 89</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">4-uy</div>
                                    <div class="text-sm text-gray-500">3-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">750,000 so'm</div>
                                    <div class="text-sm text-gray-500">Qisman to'lov</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-purple-600 mr-2">📱</span>
                                        <span class="text-sm text-gray-900">Click</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-13</div>
                                    <div class="text-xs">16:45</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-003')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="printReceipt('PAY-003')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Chek chop etish">🖨️</button>
                                        <button onclick="sendReceipt('PAY-003')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS yuborish">📱</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Payment 4 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-004</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-red-600">SA</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Sevara Abdullayeva</div>
                                            <div class="text-sm text-gray-500">+998 94 456 78 90</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1-uy</div>
                                    <div class="text-sm text-gray-500">4-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-red-600 mr-2">⏳</span>
                                        <span class="text-sm text-gray-900">Kutilayotgan</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-25</div>
                                    <div class="text-xs">Muddat</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Kechikkan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-004')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="sendReminder('PAY-004')" class="text-orange-600 hover:text-orange-900 p-1 rounded" title="Eslatma yuborish">📢</button>
                                        <button onclick="callTenant('PAY-004')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Qo'ng'iroq">📞</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Payment 5 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-005</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-indigo-600">FN</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Farrux Nazarov</div>
                                            <div class="text-sm text-gray-500">+998 95 567 89 01</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">3-uy</div>
                                    <div class="text-sm text-gray-500">1-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-blue-600 mr-2">🏦</span>
                                        <span class="text-sm text-gray-900">O'tkazma</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-12</div>
                                    <div class="text-xs">09:30</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-005')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="printReceipt('PAY-005')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Chek chop etish">🖨️</button>
                                        <button onclick="sendReceipt('PAY-005')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS yuborish">📱</button>
                                        <button class="text-gray-400 hover:text-gray-600 p-1 rounded" title="Ko'proq">⋯</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Payment 6 -->
                            <tr class="hover:bg-gray-50 payment-row">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PAY-006</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                                <span class="text-xs font-medium text-yellow-600">NK</span>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 tenant-name">Nodira Karimova</div>
                                            <div class="text-sm text-gray-500">+998 97 678 90 12</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2-uy</div>
                                    <div class="text-sm text-gray-500">3-xona</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                                    <div class="text-sm text-gray-500">Oylik ijara</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-green-600 mr-2">📱</span>
                                        <span class="text-sm text-gray-900">Payme</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>2024-01-11</div>
                                    <div class="text-xs">18:20</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button onclick="viewPayment('PAY-006')" class="text-blue-600 hover:text-blue-900 p-1 rounded" title="Ko'rish">👁️</button>
                                        <button onclick="printReceipt('PAY-006')" class="text-green-600 hover:text-green-900 p-1 rounded" title="Chek chop etish">🖨️</button>
                                        <button onclick="sendReceipt('PAY-006')" class="text-purple-600 hover:text-purple-900 p-1 rounded" title="SMS yuborish">📱</button>
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
                                    Ko'rsatilmoqda <span class="font-medium">1</span> dan <span class="font-medium">6</span> gacha, jami <span class="font-medium">47</span> ta natija
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

<!-- Payment Details Modal -->
<div id="paymentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">To'lov Tafsilotlari</h3>
                <button onclick="closePaymentModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div id="paymentDetails" class="space-y-4">
                <!-- Payment details will be loaded here -->
            </div>

            <div class="flex justify-end space-x-3 mt-6">
                <button onclick="closePaymentModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                    Yopish
                </button>
                <button onclick="printReceipt()" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                    Chek Chop Etish
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

    .payment-row {
        transition: background-color 0.2s ease-in-out;
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
        const paymentRows = document.querySelectorAll('.payment-row');

        paymentRows.forEach(row => {
            const tenantName = row.querySelector('.tenant-name').textContent.toLowerCase();
            const paymentId = row.querySelector('td:first-child').textContent.toLowerCase();

            if (tenantName.includes(searchTerm) || paymentId.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Filter functionality
    function applyFilters() {
        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;
        const houseFilter = document.getElementById('houseFilter').value;
        const statusFilter = document.getElementById('statusFilter').value;
        const methodFilter = document.getElementById('methodFilter').value;

        console.log('Filters applied:', {
            startDate,
            endDate,
            houseFilter,
            statusFilter,
            methodFilter
        });

        // In a real application, you would filter the table data here
        alert('Filtrlar qo\'llandi! (Bu demo versiyada haqiqiy filtrlash amalga oshirilmaydi)');
    }

    function clearFilters() {
        document.getElementById('startDate').value = '';
        document.getElementById('endDate').value = '';
        document.getElementById('houseFilter').value = '';
        document.getElementById('statusFilter').value = '';
        document.getElementById('methodFilter').value = '';

        // Show all rows
        const paymentRows = document.querySelectorAll('.payment-row');
        paymentRows.forEach(row => {
            row.style.display = '';
        });
    }

    // Payment actions
    function viewPayment(paymentId) {
        // Sample payment data
        const paymentData = {
            'PAY-001': {
                id: 'PAY-001',
                tenant: 'Aziza Karimova',
                phone: '+998 90 123 45 67',
                house: '1-uy',
                room: '2-xona',
                amount: '1,250,000 so\'m',
                method: 'Karta',
                date: '2024-01-15',
                time: '14:30',
                status: 'To\'langan',
                description: 'Yanvar oyi uchun oylik ijara to\'lovi'
            }
        };

        const payment = paymentData[paymentId] || {
            id: paymentId,
            tenant: 'Ma\'lumot topilmadi',
            phone: '-',
            house: '-',
            room: '-',
            amount: '-',
            method: '-',
            date: '-',
            time: '-',
            status: '-',
            description: '-'
        };

        const detailsHtml = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">To'lov ID</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.id}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ijarachi</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.tenant}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Telefon</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.phone}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Uy/Xona</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.house} - ${payment.room}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Summa</label>
                        <p class="mt-1 text-sm text-gray-900 font-semibold">${payment.amount}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">To'lov Usuli</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.method}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Sana</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.date} ${payment.time}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Holati</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.status}</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Izoh</label>
                        <p class="mt-1 text-sm text-gray-900">${payment.description}</p>
                    </div>
                </div>
            `;

        document.getElementById('paymentDetails').innerHTML = detailsHtml;
        document.getElementById('paymentModal').classList.remove('hidden');
    }

    function closePaymentModal() {
        document.getElementById('paymentModal').classList.add('hidden');
    }

    function printReceipt(paymentId) {
        console.log('Printing receipt for:', paymentId);
        alert(`${paymentId} uchun chek chop etilmoqda...`);
    }

    function sendReceipt(paymentId) {
        console.log('Sending SMS receipt for:', paymentId);
        alert(`${paymentId} uchun SMS chek yuborilmoqda...`);
    }

    function sendReminder(paymentId) {
        console.log('Sending payment reminder for:', paymentId);
        alert(`${paymentId} uchun to'lov eslatmasi yuborilmoqda...`);
    }

    function callTenant(paymentId) {
        console.log('Calling tenant for:', paymentId);
        alert(`${paymentId} ijarachisiga qo'ng'iroq qilinmoqda...`);
    }

    function addPayment() {
        alert('Yangi to\'lov qo\'shish oynasi ochilmoqda...');
        // In a real application, this would open a form to add a new payment
    }

    function exportPayments() {
        console.log('Exporting payments data...');
        alert('To\'lovlar ma\'lumotlari eksport qilinmoqda...');
        // In a real application, this would generate and download a file
    }

    // Set default date range (current month)
    window.addEventListener('load', function() {
        const now = new Date();
        const firstDay = new Date(now.getFullYear(), now.getMonth(), 1);
        const lastDay = new Date(now.getFullYear(), now.getMonth() + 1, 0);

        document.getElementById('startDate').value = firstDay.toISOString().split('T')[0];
        document.getElementById('endDate').value = lastDay.toISOString().split('T')[0];
    });

    // Close modal when clicking outside
    document.getElementById('paymentModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closePaymentModal();
        }
    });

    // Format numbers with thousand separators
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Auto-refresh data every 30 seconds (in a real application)
    setInterval(function() {
        // This would refresh the payment data from the server
        console.log('Auto-refreshing payment data...');
    }, 30000);
</script>
</div>
<x-admin.footer></x-admin.footer>
