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
<!-- Header -->
<header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-4">
                <button onclick="goBack()" class="text-gray-500 hover:text-gray-700 p-2 rounded-md transition-colors">
                    ← Orqaga
                </button>
                <h2 class="text-xl font-semibold text-gray-900">Bolalar Ijara Tizimi</h2>
            </div>
            <div class="flex items-center space-x-4">
                <a href="houses-list.html" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Uylar ro'yxati</a>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">🔔</button>
                <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-md transition-colors">👤</button>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Yangi Uy Qo'shish</h1>
        <p class="text-gray-600">Ijara uchun yangi uy qo'shish va xonalarni sozlash</p>
    </div>

    <!-- Add House Form -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Uy Ma'lumotlari</h2>
        </div>

        <form id="houseForm" class="p-6 space-y-6">
            <!-- Basic Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="houseName" class="block text-sm font-medium text-gray-700 mb-2">Uy nomi *</label>
                    <input type="text" id="houseName" name="houseName" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masalan: 5-uy">
                </div>

                <div>
                    <label for="houseType" class="block text-sm font-medium text-gray-700 mb-2">Uy turi *</label>
                    <select id="houseType" name="houseType" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Tanlang</option>
                        <option value="hovli_uy">Hovli uy</option>
                        <option value="kvartira">Kvartira</option>
                        <option value="townhouse">Townhouse</option>
                        <option value="villa">Villa</option>
                    </select>
                </div>
            </div>

            <!-- Address Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Manzil Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="district" class="block text-sm font-medium text-gray-700 mb-2">Tuman *</label>
                        <select id="district" name="district" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Tanlang</option>
                            <option value="chilonzor">Chilonzor tumani</option>
                            <option value="yunusobod">Yunusobod tumani</option>
                            <option value="mirzo_ulugbek">Mirzo Ulug'bek tumani</option>
                            <option value="shayxontohur">Shayxontohur tumani</option>
                            <option value="bektemir">Bektemir tumani</option>
                            <option value="sergeli">Sergeli tumani</option>
                            <option value="yakkasaroy">Yakkasaroy tumani</option>
                            <option value="uchtepa">Uchtepa tumani</option>
                            <option value="mirobod">Mirobod tumani</option>
                            <option value="almazar">Almazar tumani</option>
                        </select>
                    </div>

                    <div>
                        <label for="street" class="block text-sm font-medium text-gray-700 mb-2">Ko'cha nomi *</label>
                        <input type="text" id="street" name="street" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masalan: Qatortol ko'chasi">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="fullAddress" class="block text-sm font-medium text-gray-700 mb-2">To'liq manzil *</label>
                    <textarea id="fullAddress" name="fullAddress" rows="3" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Toshkent shahar, Chilonzor tumani, Qatortol ko'chasi, 123-uy"></textarea>
                </div>
            </div>

            <!-- House Details -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Uy Tafsilotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="totalRooms" class="block text-sm font-medium text-gray-700 mb-2">Jami xonalar soni *</label>
                        <input type="number" id="totalRooms" name="totalRooms" required min="1" max="20" onchange="generateRoomInputs()"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="6">
                    </div>

                    <div>
                        <label for="bathrooms" class="block text-sm font-medium text-gray-700 mb-2">Hammomlar soni *</label>
                        <input type="number" id="bathrooms" name="bathrooms" required min="1" max="10"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="2">
                    </div>

                    <div>
                        <label for="totalArea" class="block text-sm font-medium text-gray-700 mb-2">Umumiy maydoni (m²)</label>
                        <input type="number" id="totalArea" name="totalArea" min="50" max="1000"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="150">
                    </div>
                </div>
            </div>

            <!-- Room Configuration -->
            <div class="border-t border-gray-200 pt-6" id="roomsSection" style="display: none;">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Xonalar Konfiguratsiyasi</h3>
                <div id="roomsContainer" class="space-y-4">
                    <!-- Room inputs will be generated here -->
                </div>
            </div>

            <!-- Amenities -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Qulayliklar</h3>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="wifi" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Wi-Fi</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="parking" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Avtomobil joyi</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="laundry" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Kir yuvish mashinasi</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="kitchen" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Oshxona</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="ac" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Konditsioner</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="heating" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Isitish tizimi</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="security" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Xavfsizlik</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="garden" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Bog'</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" name="amenities" value="furnished" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">Mebelli</span>
                    </label>
                </div>
            </div>

            <!-- Financial Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Moliyaviy Ma'lumotlar</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="rentPerRoom" class="block text-sm font-medium text-gray-700 mb-2">Xona uchun oylik ijara *</label>
                        <div class="relative">
                            <input type="number" id="rentPerRoom" name="rentPerRoom" required value="1250000"
                                   class="w-full px-3 py-2 pr-16 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <span class="absolute right-3 top-2 text-gray-500 text-sm">so'm</span>
                        </div>
                    </div>

                    <div>
                        <label for="deposit" class="block text-sm font-medium text-gray-700 mb-2">Omonat (Depozit)</label>
                        <div class="relative">
                            <input type="number" id="deposit" name="deposit" value="1250000"
                                   class="w-full px-3 py-2 pr-16 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <span class="absolute right-3 top-2 text-gray-500 text-sm">so'm</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="utilities" class="block text-sm font-medium text-gray-700 mb-2">Kommunal to'lovlar</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="utilities" value="electricity" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700">Elektr</span>
                        </label>

                        <label class="flex items-center">
                            <input type="checkbox" name="utilities" value="water" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700">Suv</span>
                        </label>

                        <label class="flex items-center">
                            <input type="checkbox" name="utilities" value="gas" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700">Gaz</span>
                        </label>

                        <label class="flex items-center">
                            <input type="checkbox" name="utilities" value="internet" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700">Internet</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Qo'shimcha Ma'lumotlar</h3>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Uy haqida ma'lumot</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Uy haqida batafsil ma'lumot, qoidalar, maxsus shartlar..."></textarea>
                </div>

                <div class="mt-4">
                    <label for="rules" class="block text-sm font-medium text-gray-700 mb-2">Uy qoidalari</label>
                    <textarea id="rules" name="rules" rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Uyda yashash qoidalari, taqiqlar, vaqt cheklovlari..."></textarea>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="border-t border-gray-200 pt-6">
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="goBack()"
                            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                        Bekor qilish
                    </button>
                    <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Uyni Qo'shish
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 max-w-md mx-4">
            <div class="text-center">
                <div class="text-green-500 text-6xl mb-4">🏠</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Uy muvaffaqiyatli qo'shildi!</h3>
                <p class="text-gray-600 mb-4">Yangi uy tizimga muvaffaqiyatli qo'shildi va ijara uchun tayyor.</p>
                <div class="flex space-x-4">
                    <button onclick="addAnother()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Yana qo'shish
                    </button>
                    <button onclick="viewHouses()" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                        Uylar ro'yxati
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Generate room inputs based on total rooms
    function generateRoomInputs() {
        const totalRooms = parseInt(document.getElementById('totalRooms').value);
        const roomsContainer = document.getElementById('roomsContainer');
        const roomsSection = document.getElementById('roomsSection');

        if (totalRooms > 0) {
            roomsSection.style.display = 'block';
            roomsContainer.innerHTML = '';

            for (let i = 1; i <= totalRooms; i++) {
                const roomDiv = document.createElement('div');
                roomDiv.className = 'grid grid-cols-1 md:grid-cols-3 gap-4 p-4 border border-gray-200 rounded-lg';
                roomDiv.innerHTML = `
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">${i}-xona nomi</label>
                            <input type="text" name="room_${i}_name" value="${i}-xona"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Maydoni (m²)</label>
                            <input type="number" name="room_${i}_area" min="8" max="50" placeholder="15"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Holati</label>
                            <select name="room_${i}_status"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="available">Bo'sh</option>
                                <option value="occupied">Band</option>
                                <option value="maintenance">Ta'mirlash</option>
                            </select>
                        </div>
                    `;
                roomsContainer.appendChild(roomDiv);
            }
        } else {
            roomsSection.style.display = 'none';
        }
    }

    // Auto-generate full address
    document.getElementById('district').addEventListener('change', updateFullAddress);
    document.getElementById('street').addEventListener('input', updateFullAddress);

    function updateFullAddress() {
        const district = document.getElementById('district');
        const street = document.getElementById('street').value;
        const fullAddress = document.getElementById('fullAddress');

        if (district.value && street) {
            const districtText = district.options[district.selectedIndex].text;
            fullAddress.value = `Toshkent shahar, ${districtText}, ${street}`;
        }
    }

    // Form submission
    document.getElementById('houseForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Validate required fields
        const requiredFields = this.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });

        if (!isValid) {
            alert('Iltimos, barcha majburiy maydonlarni to\'ldiring!');
            return;
        }

        // Simulate form submission
        const submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.textContent = 'Qo\'shilmoqda...';

        setTimeout(() => {
            // Show success modal
            document.getElementById('successModal').classList.remove('hidden');
            document.getElementById('successModal').classList.add('flex');

            // Reset button
            submitButton.disabled = false;
            submitButton.textContent = 'Uyni Qo\'shish';
        }, 2000);
    });

    // Navigation functions
    function goBack() {
        if (confirm('Siz haqiqatan ham orqaga qaytmoqchimisiz? Kiritilgan ma\'lumotlar yo\'qoladi.')) {
            window.history.back();
        }
    }

    function addAnother() {
        document.getElementById('successModal').classList.add('hidden');
        document.getElementById('successModal').classList.remove('flex');
        document.getElementById('houseForm').reset();
        document.getElementById('roomsSection').style.display = 'none';
    }

    function viewHouses() {
        window.location.href = 'houses-list.html';
    }
</script>
</body>
</html>
