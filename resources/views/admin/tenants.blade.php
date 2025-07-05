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
<!-- Header -->
<header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-4">
                <a href="index.html" class="text-gray-500 hover:text-gray-700 p-2 rounded-md transition-colors">
                    ← Bosh sahifa
                </a>
                <h2 class="text-xl font-semibold text-gray-900">Bolalar Ijara Tizimi</h2>
            </div>
            <div class="flex items-center space-x-4">
                <a href="register-child.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    + Yangi Bola Qo'shish
                </a>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">🔔</button>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">👤</button>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Ijarachilar Ro'yxati</h1>
        <p class="text-gray-600">Barcha bolalar va ularning to'lov holatini boshqaring</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-blue-600 font-semibold">👥</span>
                    </div>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">15</div>
                    <div class="text-sm text-gray-600">Jami ijarachilar</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-green-600 font-semibold">✅</span>
                    </div>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-green-600">12</div>
                    <div class="text-sm text-gray-600">To'lagan</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="text-red-600 font-semibold">⚠️</span>
                    </div>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-red-600">2</div>
                    <div class="text-sm text-gray-600">Kechikkan</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                        <span class="text-yellow-600 font-semibold">⏳</span>
                    </div>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-yellow-600">1</div>
                    <div class="text-sm text-gray-600">Kutilmoqda</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label for="searchTenant" class="block text-sm font-medium text-gray-700 mb-2">Qidirish</label>
                <input type="text" id="searchTenant" placeholder="Ism yoki telefon..."
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="filterHouse" class="block text-sm font-medium text-gray-700 mb-2">Uy</label>
                <select id="filterHouse"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Barcha uylar</option>
                    <option value="1">1-uy</option>
                    <option value="2">2-uy</option>
                    <option value="3">3-uy</option>
                    <option value="4">4-uy</option>
                </select>
            </div>

            <div>
                <label for="filterStatus" class="block text-sm font-medium text-gray-700 mb-2">To'lov holati</label>
                <select id="filterStatus"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Barcha holatlar</option>
                    <option value="paid">To'langan</option>
                    <option value="late">Kechikkan</option>
                    <option value="pending">Kutilmoqda</option>
                </select>
            </div>

            <div>
                <label for="filterUniversity" class="block text-sm font-medium text-gray-700 mb-2">Universitet</label>
                <select id="filterUniversity"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Barcha universitetlar</option>
                    <option value="TATU">TATU</option>
                    <option value="NUUz">NUUz</option>
                    <option value="TDTU">TDTU</option>
                    <option value="UzMU">UzMU</option>
                </select>
            </div>

            <div class="flex items-end">
                <button onclick="clearFilters()" class="w-full px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Tozalash
                </button>
            </div>
        </div>
    </div>

    <!-- View Toggle -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex space-x-2">
            <button id="gridViewBtn" onclick="switchView('grid')" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm transition-colors">
                📱 Kartalar
            </button>
            <button id="tableViewBtn" onclick="switchView('table')" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md text-sm hover:bg-gray-50 transition-colors">
                📋 Jadval
            </button>
        </div>

        <div class="flex space-x-2">
            <button onclick="exportData()" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md text-sm hover:bg-gray-50 transition-colors">
                📊 Eksport
            </button>
            <button onclick="sendBulkReminder()" class="px-4 py-2 bg-yellow-600 text-white rounded-md text-sm hover:bg-yellow-700 transition-colors">
                📢 Ommaviy eslatma
            </button>
        </div>
    </div>

    <!-- Grid View -->
    <div id="gridView" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Tenant Card 1 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden tenant-card"
             data-house="1" data-status="paid" data-university="TATU" data-name="aziza karimova" data-phone="+998901234567">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-lg">AK</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Aziza Karimova</h3>
                            <p class="text-sm text-gray-600">19 yosh • TATU</p>
                        </div>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                </div>

                <div class="space-y-3 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Uy/Xona:</span>
                        <span class="font-medium">1-uy, 2-xona</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik to'lov:</span>
                        <span class="font-medium text-green-600">1,250,000 so'm</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Keyingi to'lov:</span>
                        <span class="font-medium">2024-02-15</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Telefon:</span>
                        <span class="font-medium">+998 90 123 45 67</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewTenant(1)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="callTenant('+998901234567')" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        📞
                    </button>
                    <button onclick="messageTenant(1)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        💬
                    </button>
                </div>
            </div>
        </div>

        <!-- Tenant Card 2 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden tenant-card"
             data-house="1" data-status="paid" data-university="NUUz" data-name="bobur toshmatov" data-phone="+998933456789">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <span class="text-green-600 font-semibold text-lg">BT</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Bobur Toshmatov</h3>
                            <p class="text-sm text-gray-600">20 yosh • NUUz</p>
                        </div>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">To'langan</span>
                </div>

                <div class="space-y-3 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Uy/Xona:</span>
                        <span class="font-medium">1-uy, 1-xona</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik to'lov:</span>
                        <span class="font-medium text-green-600">1,250,000 so'm</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Keyingi to'lov:</span>
                        <span class="font-medium">2024-02-10</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Telefon:</span>
                        <span class="font-medium">+998 93 345 67 89</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewTenant(2)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="callTenant('+998933456789')" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        📞
                    </button>
                    <button onclick="messageTenant(2)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        💬
                    </button>
                </div>
            </div>
        </div>

        <!-- Tenant Card 3 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden tenant-card"
             data-house="2" data-status="late" data-university="TDTU" data-name="dilnoza rahimova" data-phone="+998955678901">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <span class="text-red-600 font-semibold text-lg">DR</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Dilnoza Rahimova</h3>
                            <p class="text-sm text-gray-600">18 yosh • TDTU</p>
                        </div>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Kechikmoqda</span>
                </div>

                <div class="space-y-3 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Uy/Xona:</span>
                        <span class="font-medium">2-uy, 1-xona</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik to'lov:</span>
                        <span class="font-medium text-green-600">1,250,000 so'm</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Keyingi to'lov:</span>
                        <span class="font-medium text-red-600">2024-02-20 (3 kun kechikdi)</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Telefon:</span>
                        <span class="font-medium">+998 95 567 89 01</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewTenant(3)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="callTenant('+998955678901')" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        📞
                    </button>
                    <button onclick="sendReminder(3)" class="px-3 py-2 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition-colors">
                        ⚠️
                    </button>
                </div>
            </div>
        </div>

        <!-- Tenant Card 4 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden tenant-card"
             data-house="3" data-status="pending" data-university="UzMU" data-name="malika abdullayeva" data-phone="+998999012345">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <span class="text-yellow-600 font-semibold text-lg">MA</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Malika Abdullayeva</h3>
                            <p class="text-sm text-gray-600">19 yosh • UzMU</p>
                        </div>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Kutilmoqda</span>
                </div>

                <div class="space-y-3 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Uy/Xona:</span>
                        <span class="font-medium">3-uy, 2-xona</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik to'lov:</span>
                        <span class="font-medium text-green-600">1,250,000 so'm</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Keyingi to'lov:</span>
                        <span class="font-medium text-yellow-600">2024-02-05 (ertaga)</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Telefon:</span>
                        <span class="font-medium">+998 99 901 23 45</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewTenant(4)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="callTenant('+998999012345')" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        📞
                    </button>
                    <button onclick="sendReminder(4)" class="px-3 py-2 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition-colors">
                        🔔
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Table View (Hidden by default) -->
    <div id="tableView" class="bg-white rounded-lg shadow-sm border border-gray-200 hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <input type="checkbox" id="selectAll" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ijarachi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uy/Xona</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Oylik to'lov</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keyingi to'lov</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Holati</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amallar</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="tenantsTableBody">
                <tr class="hover:bg-gray-50 tenant-row" data-house="1" data-status="paid" data-university="TATU">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-blue-600 font-semibold text-sm">AK</span>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900">Aziza Karimova</div>
                                <div class="text-sm text-gray-500">19 yosh • TATU</div>
                                <div class="text-xs text-gray-400">+998 90 123 45 67</div>
                            </div>
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
                            <button onclick="viewTenant(1)" class="text-blue-600 hover:text-blue-900">Ko'rish</button>
                            <button onclick="callTenant('+998901234567')" class="text-gray-400 hover:text-gray-600">📞</button>
                            <button onclick="messageTenant(1)" class="text-gray-400 hover:text-gray-600">💬</button>
                        </div>
                    </td>
                </tr>
                <!-- More table rows would go here -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Empty State -->
    <div id="emptyState" class="text-center py-12 hidden">
        <div class="text-gray-400 text-6xl mb-4">👥</div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Ijarachilar topilmadi</h3>
        <p class="text-gray-600 mb-4">Qidiruv shartlariga mos ijarachilar mavjud emas.</p>
        <button onclick="clearFilters()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
            Barcha ijarachilarni ko'rsatish
        </button>
    </div>
</main>

<!-- Tenant Detail Modal -->
<div id="tenantModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900" id="modalTenantTitle">Ijarachi Tafsilotlari</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">✕</button>
            </div>
        </div>
        <div class="p-6" id="modalContent">
            <!-- Modal content will be populated here -->
        </div>
    </div>
</div>

<script>
    let currentView = 'grid';

    // Search and filter functionality
    document.getElementById('searchTenant').addEventListener('input', filterTenants);
    document.getElementById('filterHouse').addEventListener('change', filterTenants);
    document.getElementById('filterStatus').addEventListener('change', filterTenants);
    document.getElementById('filterUniversity').addEventListener('change', filterTenants);

    function filterTenants() {
        const searchTerm = document.getElementById('searchTenant').value.toLowerCase();
        const houseFilter = document.getElementById('filterHouse').value;
        const statusFilter = document.getElementById('filterStatus').value;
        const universityFilter = document.getElementById('filterUniversity').value;

        const tenantCards = document.querySelectorAll('.tenant-card');
        const tenantRows = document.querySelectorAll('.tenant-row');
        let visibleCount = 0;

        // Filter cards
        tenantCards.forEach(card => {
            const name = card.getAttribute('data-name');
            const phone = card.getAttribute('data-phone');
            const house = card.getAttribute('data-house');
            const status = card.getAttribute('data-status');
            const university = card.getAttribute('data-university');

            const matchesSearch = name.includes(searchTerm) || phone.includes(searchTerm);
            const matchesHouse = !houseFilter || house === houseFilter;
            const matchesStatus = !statusFilter || status === statusFilter;
            const matchesUniversity = !universityFilter || university === universityFilter;

            if (matchesSearch && matchesHouse && matchesStatus && matchesUniversity) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Filter table rows
        tenantRows.forEach(row => {
            const house = row.getAttribute('data-house');
            const status = row.getAttribute('data-status');
            const university = row.getAttribute('data-university');
            const nameElement = row.querySelector('.text-sm.font-medium');
            const phoneElement = row.querySelector('.text-xs.text-gray-400');

            if (nameElement && phoneElement) {
                const name = nameElement.textContent.toLowerCase();
                const phone = phoneElement.textContent.toLowerCase();

                const matchesSearch = name.includes(searchTerm) || phone.includes(searchTerm);
                const matchesHouse = !houseFilter || house === houseFilter;
                const matchesStatus = !statusFilter || status === statusFilter;
                const matchesUniversity = !universityFilter || university === universityFilter;

                if (matchesSearch && matchesHouse && matchesStatus && matchesUniversity) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });

        // Show/hide empty state
        const emptyState = document.getElementById('emptyState');
        if (visibleCount === 0 && currentView === 'grid') {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
        }
    }

    function clearFilters() {
        document.getElementById('searchTenant').value = '';
        document.getElementById('filterHouse').value = '';
        document.getElementById('filterStatus').value = '';
        document.getElementById('filterUniversity').value = '';
        filterTenants();
    }

    // View switching
    function switchView(view) {
        currentView = view;
        const gridView = document.getElementById('gridView');
        const tableView = document.getElementById('tableView');
        const gridBtn = document.getElementById('gridViewBtn');
        const tableBtn = document.getElementById('tableViewBtn');

        if (view === 'grid') {
            gridView.classList.remove('hidden');
            tableView.classList.add('hidden');
            gridBtn.classList.add('bg-blue-600', 'text-white');
            gridBtn.classList.remove('border', 'border-gray-300', 'text-gray-700');
            tableBtn.classList.remove('bg-blue-600', 'text-white');
            tableBtn.classList.add('border', 'border-gray-300', 'text-gray-700');
        } else {
            gridView.classList.add('hidden');
            tableView.classList.remove('hidden');
            tableBtn.classList.add('bg-blue-600', 'text-white');
            tableBtn.classList.remove('border', 'border-gray-300', 'text-gray-700');
            gridBtn.classList.remove('bg-blue-600', 'text-white');
            gridBtn.classList.add('border', 'border-gray-300', 'text-gray-700');
        }

        filterTenants(); // Reapply filters
    }

    // Tenant actions
    function viewTenant(tenantId) {
        const tenantData = getTenantData(tenantId);
        showTenantModal(tenantData);
    }

    function callTenant(phone) {
        alert(`${phone} raqamiga qo'ng'iroq qilish...`);
    }

    function messageTenant(tenantId) {
        alert(`${tenantId}-ijarachiga xabar yuborish...`);
    }

    function sendReminder(tenantId) {
        alert(`${tenantId}-ijarachiga to'lov eslatmasi yuborildi`);
    }

    function sendBulkReminder() {
        alert('Barcha kechikkan to\'lovchilar uchun eslatma yuborildi');
    }

    function exportData() {
        alert('Ma\'lumotlar Excel faylga eksport qilindi');
    }

    function getTenantData(tenantId) {
        // Mock data - in real app, this would come from API
        const tenants = {
            1: {
                name: 'Aziza Karimova',
                age: 19,
                university: 'TATU',
                course: '2-kurs',
                faculty: 'Kompyuter injiniringi',
                house: '1-uy',
                room: '2-xona',
                phone: '+998 90 123 45 67',
                parentName: 'Karim Karimov',
                parentPhone: '+998 91 234 56 78',
                monthlyRent: '1,250,000 so\'m',
                nextPayment: '2024-02-15',
                status: 'To\'langan',
                joinDate: '2023-09-01',
                paymentHistory: [
                    { date: '2024-01-15', amount: '1,250,000', status: 'To\'langan' },
                    { date: '2023-12-15', amount: '1,250,000', status: 'To\'langan' },
                    { date: '2023-11-15', amount: '1,250,000', status: 'To\'langan' }
                ]
            }
        };
        return tenants[tenantId] || {};
    }

    function showTenantModal(tenantData) {
        document.getElementById('modalTenantTitle').textContent = tenantData.name + ' - Tafsilotlar';

        const modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = `
                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Shaxsiy Ma'lumotlar</h4>
                            <div class="space-y-2 text-sm">
                                <div><span class="text-gray-600">Ism:</span> ${tenantData.name}</div>
                                <div><span class="text-gray-600">Yoshi:</span> ${tenantData.age}</div>
                                <div><span class="text-gray-600">Telefon:</span> ${tenantData.phone}</div>
                                <div><span class="text-gray-600">Qo'shilgan sana:</span> ${tenantData.joinDate}</div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Ta'lim Ma'lumotlari</h4>
                            <div class="space-y-2 text-sm">
                                <div><span class="text-gray-600">Universitet:</span> ${tenantData.university}</div>
                                <div><span class="text-gray-600">Kurs:</span> ${tenantData.course}</div>
                                <div><span class="text-gray-600">Fakultet:</span> ${tenantData.faculty}</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Yashash Joyi</h4>
                            <div class="space-y-2 text-sm">
                                <div><span class="text-gray-600">Uy:</span> ${tenantData.house}</div>
                                <div><span class="text-gray-600">Xona:</span> ${tenantData.room}</div>
                                <div><span class="text-gray-600">Oylik ijara:</span> ${tenantData.monthlyRent}</div>
                                <div><span class="text-gray-600">Keyingi to'lov:</span> ${tenantData.nextPayment}</div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Ota-ona Ma'lumotlari</h4>
                            <div class="space-y-2 text-sm">
                                <div><span class="text-gray-600">Ism:</span> ${tenantData.parentName}</div>
                                <div><span class="text-gray-600">Telefon:</span> ${tenantData.parentPhone}</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-medium text-gray-900 mb-3">To'lovlar Tarixi</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-3 py-2 text-left">Sana</th>
                                        <th class="px-3 py-2 text-left">Miqdor</th>
                                        <th class="px-3 py-2 text-left">Holat</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    ${tenantData.paymentHistory.map(payment => `
                                        <tr>
                                            <td class="px-3 py-2">${payment.date}</td>
                                            <td class="px-3 py-2">${payment.amount} so'm</td>
                                            <td class="px-3 py-2">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                    ${payment.status}
                                                </span>
                                            </td>
                                        </tr>
                                    `).join('')}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="flex space-x-4 pt-4 border-t border-gray-200">
                        <button onclick="callTenant('${tenantData.phone}')" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                            📞 Qo'ng'iroq qilish
                        </button>
                        <button onclick="messageTenant(1)" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                            💬 Xabar yuborish
                        </button>
                        <button onclick="callTenant('${tenantData.parentPhone}')" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                            👨‍👩‍👧‍👦 Ota-onaga qo'ng'iroq
                        </button>
                    </div>
                </div>
            `;

        document.getElementById('tenantModal').classList.remove('hidden');
        document.getElementById('tenantModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('tenantModal').classList.add('hidden');
        document.getElementById('tenantModal').classList.remove('flex');
    }

    // Close modal when clicking outside
    document.getElementById('tenantModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Select all functionality
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('#tenantsTableBody input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>
</body>
</html>
