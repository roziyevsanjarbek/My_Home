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
<!-- Header -->
<header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <h2 class="text-xl font-semibold text-gray-900">Bolalar Ijara Tizimi</h2>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                    <input type="text" id="searchInput" class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Bolalarni qidirish...">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    + Yangi Bola Qo'shish
                </button>
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
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Yangi Bola Qo'shish
                    </button>
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
                    <tr class="hover:bg-gray-50 tenant-row">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <div class="text-sm font-medium text-gray-900 tenant-name">Bobur Toshmatov</div>
                                <div class="text-sm text-gray-500">20 yosh • NUUz</div>
                                <div class="text-xs text-gray-400">Tel: +998 93 345 67 89</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1-uy</div>
                            <div class="text-sm text-gray-500">1-xona</div>
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
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">📞</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">💬</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">⋯</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 tenant-row">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <div class="text-sm font-medium text-gray-900 tenant-name">Dilnoza Rahimova</div>
                                <div class="text-sm text-gray-500">18 yosh • TDTU</div>
                                <div class="text-xs text-gray-400">Tel: +998 95 567 89 01</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2-uy</div>
                            <div class="text-sm text-gray-500">1-xona</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-20</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Kechikmoqda</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">📞</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">💬</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">⋯</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 tenant-row">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <div class="text-sm font-medium text-gray-900 tenant-name">Jasur Nazarov</div>
                                <div class="text-sm text-gray-500">21 yosh • TATU</div>
                                <div class="text-xs text-gray-400">Tel: +998 97 789 01 23</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2-uy</div>
                            <div class="text-sm text-gray-500">3-xona</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-25</td>
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
                    <tr class="hover:bg-gray-50 tenant-row">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <div class="text-sm font-medium text-gray-900 tenant-name">Malika Abdullayeva</div>
                                <div class="text-sm text-gray-500">19 yosh • UzMU</div>
                                <div class="text-xs text-gray-400">Tel: +998 99 901 23 45</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">3-uy</div>
                            <div class="text-sm text-gray-500">2-xona</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">1,250,000 so'm</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-02-05</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Kutilmoqda</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">📞</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">💬</button>
                                <button class="text-gray-400 hover:text-gray-600 p-1 rounded">⋯</button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
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

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm">⚠️</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Kechikkan To'lov</p>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Kechikkan</span>
                            </div>
                            <p class="text-sm text-gray-600">Dilnoza Rahimova - 3 kun kechikdi</p>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">🕐 4 soat oldin</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm">✅</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">To'lov Qabul Qilindi</p>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Muvaffaq</span>
                            </div>
                            <p class="text-sm text-gray-600">Bobur Toshmatov - 1,250,000 so'm</p>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">🕐 1 kun oldin</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm">🔔</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">To'lov Eslatmasi Yuborildi</p>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Eslatma</span>
                            </div>
                            <p class="text-sm text-gray-600">Malika Abdullayeva - ertaga to'lash kerak</p>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">🕐 2 kun oldin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Houses Overview -->
    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Uylar Umumiy Ko'rinishi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-center mb-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg">🏠</span>
                        <h4 class="font-semibold text-gray-900">1-uy</h4>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Chilonzor tumani, Qatortol ko'chasi</p>
                <div class="space-y-2 mb-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Xonalar:</span>
                        <span class="font-medium">2/4</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik daromad:</span>
                        <span class="font-medium text-green-600">2,500,000 so'm</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center space-x-1 mb-2">
                        <span class="text-sm">👥</span>
                        <span class="text-sm text-gray-600">Yashovchilar:</span>
                    </div>
                    <div class="space-y-1">
                        <div class="text-xs bg-gray-50 px-2 py-1 rounded">Aziza Karimova</div>
                        <div class="text-xs bg-gray-50 px-2 py-1 rounded">Bobur Toshmatov</div>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-center mb-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg">🏠</span>
                        <h4 class="font-semibold text-gray-900">2-uy</h4>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Yunusobod tumani, Bog'ishamol ko'chasi</p>
                <div class="space-y-2 mb-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Xonalar:</span>
                        <span class="font-medium">2/5</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik daromad:</span>
                        <span class="font-medium text-green-600">2,500,000 so'm</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center space-x-1 mb-2">
                        <span class="text-sm">👥</span>
                        <span class="text-sm text-gray-600">Yashovchilar:</span>
                    </div>
                    <div class="space-y-1">
                        <div class="text-xs bg-gray-50 px-2 py-1 rounded">Dilnoza Rahimova</div>
                        <div class="text-xs bg-gray-50 px-2 py-1 rounded">Jasur Nazarov</div>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-center mb-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg">🏠</span>
                        <h4 class="font-semibold text-gray-900">3-uy</h4>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Mirzo Ulug'bek tumani, Universitet ko'chasi</p>
                <div class="space-y-2 mb-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Xonalar:</span>
                        <span class="font-medium">1/3</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik daromad:</span>
                        <span class="font-medium text-green-600">1,250,000 so'm</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center space-x-1 mb-2">
                        <span class="text-sm">👥</span>
                        <span class="text-sm text-gray-600">Yashovchilar:</span>
                    </div>
                    <div class="space-y-1">
                        <div class="text-xs bg-gray-50 px-2 py-1 rounded">Malika Abdullayeva</div>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-center mb-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg">🏠</span>
                        <h4 class="font-semibold text-gray-900">4-uy</h4>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Bo'sh</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Shayxontohur tumani, Navoi ko'chasi</p>
                <div class="space-y-2 mb-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Xonalar:</span>
                        <span class="font-medium">0/6</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Oylik daromad:</span>
                        <span class="font-medium text-gray-600">0 so'm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
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

    // Button click handlers
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', function() {
            if (this.textContent.includes('Yangi Bola')) {
                alert('Yangi bola qo\'shish formasi ochiladi');
            } else if (this.textContent.includes('📞')) {
                alert('Telefon qilish funksiyasi');
            } else if (this.textContent.includes('💬')) {
                alert('Xabar yuborish funksiyasi');
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
