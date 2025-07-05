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
                <a href="add-house.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    + Yangi Uy Qo'shish
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
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Uylar Ro'yxati</h1>
        <p class="text-gray-600">Barcha ijara uylarini boshqaring va kuzating</p>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label for="searchHouse" class="block text-sm font-medium text-gray-700 mb-2">Qidirish</label>
                <input type="text" id="searchHouse" placeholder="Uy nomi yoki manzil..."
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="filterDistrict" class="block text-sm font-medium text-gray-700 mb-2">Tuman</label>
                <select id="filterDistrict"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Barcha tumanlar</option>
                    <option value="chilonzor">Chilonzor</option>
                    <option value="yunusobod">Yunusobod</option>
                    <option value="mirzo_ulugbek">Mirzo Ulug'bek</option>
                    <option value="shayxontohur">Shayxontohur</option>
                </select>
            </div>

            <div>
                <label for="filterStatus" class="block text-sm font-medium text-gray-700 mb-2">Holati</label>
                <select id="filterStatus"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Barcha holatlar</option>
                    <option value="available">Bo'sh</option>
                    <option value="partial">Qisman band</option>
                    <option value="full">To'liq band</option>
                    <option value="maintenance">Ta'mirlash</option>
                </select>
            </div>

            <div class="flex items-end">
                <button onclick="clearFilters()" class="w-full px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Tozalash
                </button>
            </div>
        </div>
    </div>

    <!-- Houses Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="housesGrid">
        <!-- House Card 1 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card" data-district="chilonzor" data-status="partial">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 house-name">1-uy</h3>
                        <p class="text-sm text-gray-600">Hovli uy</p>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600 house-address">Chilonzor tumani, Qatortol ko'chasi, 123-uy</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-gray-900">2/4</div>
                        <div class="text-xs text-gray-600">Band xonalar</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-green-600">2,500,000</div>
                        <div class="text-xs text-gray-600">Oylik daromad</div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm mb-2">
                        <span class="text-gray-600">Bandlik darajasi</span>
                        <span class="font-medium">50%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 50%"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Yashovchilar:</h4>
                    <div class="space-y-1">
                        <div class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">Aziza Karimova (2-xona)</div>
                        <div class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">Bobur Toshmatov (1-xona)</div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewHouse(1)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="editHouse(1)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        Tahrirlash
                    </button>
                </div>
            </div>
        </div>

        <!-- House Card 2 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card" data-district="yunusobod" data-status="partial">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 house-name">2-uy</h3>
                        <p class="text-sm text-gray-600">Hovli uy</p>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600 house-address">Yunusobod tumani, Bog'ishamol ko'chasi, 456-uy</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-gray-900">2/5</div>
                        <div class="text-xs text-gray-600">Band xonalar</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-green-600">2,500,000</div>
                        <div class="text-xs text-gray-600">Oylik daromad</div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm mb-2">
                        <span class="text-gray-600">Bandlik darajasi</span>
                        <span class="font-medium">40%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 40%"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Yashovchilar:</h4>
                    <div class="space-y-1">
                        <div class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">Dilnoza Rahimova (1-xona)</div>
                        <div class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">Jasur Nazarov (3-xona)</div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewHouse(2)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="editHouse(2)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        Tahrirlash
                    </button>
                </div>
            </div>
        </div>

        <!-- House Card 3 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card" data-district="mirzo_ulugbek" data-status="partial">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 house-name">3-uy</h3>
                        <p class="text-sm text-gray-600">Kvartira</p>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Qisman band</span>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600 house-address">Mirzo Ulug'bek tumani, Universitet ko'chasi, 789-uy</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-gray-900">1/3</div>
                        <div class="text-xs text-gray-600">Band xonalar</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-green-600">1,250,000</div>
                        <div class="text-xs text-gray-600">Oylik daromad</div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm mb-2">
                        <span class="text-gray-600">Bandlik darajasi</span>
                        <span class="font-medium">33%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 33%"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Yashovchilar:</h4>
                    <div class="space-y-1">
                        <div class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">Malika Abdullayeva (2-xona)</div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewHouse(3)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="editHouse(3)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        Tahrirlash
                    </button>
                </div>
            </div>
        </div>

        <!-- House Card 4 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden house-card" data-district="shayxontohur" data-status="available">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 house-name">4-uy</h3>
                        <p class="text-sm text-gray-600">Villa</p>
                    </div>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Bo'sh</span>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600 house-address">Shayxontohur tumani, Navoi ko'chasi, 321-uy</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-gray-900">0/6</div>
                        <div class="text-xs text-gray-600">Band xonalar</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-lg font-semibold text-gray-600">0</div>
                        <div class="text-xs text-gray-600">Oylik daromad</div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm mb-2">
                        <span class="text-gray-600">Bandlik darajasi</span>
                        <span class="font-medium">0%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Yashovchilar:</h4>
                    <div class="text-xs text-gray-500 italic">Hozircha yashovchi yo'q</div>
                </div>

                <div class="flex space-x-2">
                    <button onclick="viewHouse(4)" class="flex-1 px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition-colors">
                        Ko'rish
                    </button>
                    <button onclick="editHouse(4)" class="px-3 py-2 border border-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-50 transition-colors">
                        Tahrirlash
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Empty State (Hidden by default) -->
    <div id="emptyState" class="text-center py-12 hidden">
        <div class="text-gray-400 text-6xl mb-4">🏠</div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Uylar topilmadi</h3>
        <p class="text-gray-600 mb-4">Qidiruv shartlariga mos uylar mavjud emas.</p>
        <button onclick="clearFilters()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
            Barcha uylarni ko'rsatish
        </button>
    </div>
</main>

<!-- House Detail Modal -->
<div id="houseModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900" id="modalHouseTitle">Uy Tafsilotlari</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">✕</button>
            </div>
        </div>
        <div class="p-6" id="modalContent">
            <!-- Modal content will be populated here -->
        </div>
    </div>
</div>

<script>
    // Search and filter functionality
    document.getElementById('searchHouse').addEventListener('input', filterHouses);
    document.getElementById('filterDistrict').addEventListener('change', filterHouses);
    document.getElementById('filterStatus').addEventListener('change', filterHouses);

    function filterHouses() {
        const searchTerm = document.getElementById('searchHouse').value.toLowerCase();
        const districtFilter = document.getElementById('filterDistrict').value;
        const statusFilter = document.getElementById('filterStatus').value;

        const houseCards = document.querySelectorAll('.house-card');
        let visibleCount = 0;

        houseCards.forEach(card => {
            const houseName = card.querySelector('.house-name').textContent.toLowerCase();
            const houseAddress = card.querySelector('.house-address').textContent.toLowerCase();
            const district = card.getAttribute('data-district');
            const status = card.getAttribute('data-status');

            const matchesSearch = houseName.includes(searchTerm) || houseAddress.includes(searchTerm);
            const matchesDistrict = !districtFilter || district === districtFilter;
            const matchesStatus = !statusFilter || status === statusFilter;

            if (matchesSearch && matchesDistrict && matchesStatus) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide empty state
        const emptyState = document.getElementById('emptyState');
        if (visibleCount === 0) {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
        }
    }

    function clearFilters() {
        document.getElementById('searchHouse').value = '';
        document.getElementById('filterDistrict').value = '';
        document.getElementById('filterStatus').value = '';
        filterHouses();
    }

    // House actions
    function viewHouse(houseId) {
        const houseData = getHouseData(houseId);
        showHouseModal(houseData);
    }

    function editHouse(houseId) {
        alert(`${houseId}-uyni tahrirlash sahifasi ochiladi`);
    }

    function getHouseData(houseId) {
        // Mock data - in real app, this would come from API
        const houses = {
            1: {
                name: '1-uy',
                type: 'Hovli uy',
                address: 'Chilonzor tumani, Qatortol ko\'chasi, 123-uy',
                totalRooms: 4,
                occupiedRooms: 2,
                monthlyIncome: '2,500,000 so\'m',
                tenants: ['Aziza Karimova (2-xona)', 'Bobur Toshmatov (1-xona)'],
                amenities: ['Wi-Fi', 'Oshxona', 'Kir yuvish mashinasi'],
                description: 'Keng hovlili, qulay joylashgan uy. Barcha zamonaviy qulayliklar mavjud.'
            },
            2: {
                name: '2-uy',
                type: 'Hovli uy',
                address: 'Yunusobod tumani, Bog\'ishamol ko\'chasi, 456-uy',
                totalRooms: 5,
                occupiedRooms: 2,
                monthlyIncome: '2,500,000 so\'m',
                tenants: ['Dilnoza Rahimova (1-xona)', 'Jasur Nazarov (3-xona)'],
                amenities: ['Wi-Fi', 'Avtomobil joyi', 'Bog\''],
                description: 'Metro yaqinida joylashgan, transport qulayligi yuqori.'
            }
        };
        return houses[houseId] || {};
    }

    function showHouseModal(houseData) {
        document.getElementById('modalHouseTitle').textContent = houseData.name + ' - Tafsilotlar';

        const modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = `
                <div class="space-y-6">
                    <div>
                        <h4 class="font-medium text-gray-900 mb-2">Asosiy Ma'lumotlar</h4>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div><span class="text-gray-600">Turi:</span> ${houseData.type}</div>
                            <div><span class="text-gray-600">Jami xonalar:</span> ${houseData.totalRooms}</div>
                            <div><span class="text-gray-600">Band xonalar:</span> ${houseData.occupiedRooms}</div>
                            <div><span class="text-gray-600">Oylik daromad:</span> ${houseData.monthlyIncome}</div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-medium text-gray-900 mb-2">Manzil</h4>
                        <p class="text-sm text-gray-600">${houseData.address}</p>
                    </div>

                    <div>
                        <h4 class="font-medium text-gray-900 mb-2">Hozirgi Yashovchilar</h4>
                        <div class="space-y-1">
                            ${houseData.tenants.map(tenant => `
                                <div class="text-sm bg-blue-50 text-blue-700 px-3 py-2 rounded">${tenant}</div>
                            `).join('')}
                        </div>
                    </div>

                    <div>
                        <h4 class="font-medium text-gray-900 mb-2">Qulayliklar</h4>
                        <div class="flex flex-wrap gap-2">
                            ${houseData.amenities.map(amenity => `
                                <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">${amenity}</span>
                            `).join('')}
                        </div>
                    </div>

                    <div>
                        <h4 class="font-medium text-gray-900 mb-2">Tavsif</h4>
                        <p class="text-sm text-gray-600">${houseData.description}</p>
                    </div>
                </div>
            `;

        document.getElementById('houseModal').classList.remove('hidden');
        document.getElementById('houseModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('houseModal').classList.add('hidden');
        document.getElementById('houseModal').classList.remove('flex');
    }

    // Close modal when clicking outside
    document.getElementById('houseModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
</body>
</html>
