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
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Yangi Bola Ro'yxatdan O'tkazish</h1>
        <p class="text-gray-600">Yangi ijarachini tizimga qo'shish uchun quyidagi ma'lumotlarni to'ldiring</p>
    </div>

    <!-- Registration Form -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Bola Ma'lumotlari</h2>
        </div>

        <form id="childRegistrationForm" class="p-6 space-y-6">
            <!-- Personal Information Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">Ism *</label>
                    <input type="text" id="firstName" name="firstName" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masalan: Aziza">
                </div>

                <div>
                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Familiya *</label>
                    <input type="text" id="lastName" name="lastName" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masalan: Karimova">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Yoshi *</label>
                    <input type="number" id="age" name="age" required min="16" max="30"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="19">
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Jinsi *</label>
                    <select id="gender" name="gender" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Tanlang</option>
                        <option value="erkak">Erkak</option>
                        <option value="ayol">Ayol</option>
                    </select>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Aloqa Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Telefon raqami *</label>
                        <input type="tel" id="phone" name="phone" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="+998 90 123 45 67">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="aziza@example.com">
                    </div>
                </div>
            </div>

            <!-- Parent/Guardian Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Ota-ona Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="parentName" class="block text-sm font-medium text-gray-700 mb-2">Ota-ona ismi *</label>
                        <input type="text" id="parentName" name="parentName" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masalan: Karim Karimov">
                    </div>

                    <div>
                        <label for="parentPhone" class="block text-sm font-medium text-gray-700 mb-2">Ota-ona telefoni *</label>
                        <input type="tel" id="parentPhone" name="parentPhone" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="+998 91 234 56 78">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="parentAddress" class="block text-sm font-medium text-gray-700 mb-2">Ota-ona manzili</label>
                    <textarea id="parentAddress" name="parentAddress" rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Toshkent shahar, Chilonzor tumani..."></textarea>
                </div>
            </div>

            <!-- Education Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Ta'lim Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="university" class="block text-sm font-medium text-gray-700 mb-2">Universitet/Kollej *</label>
                        <select id="university" name="university" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Tanlang</option>
                            <option value="TATU">TATU - Toshkent Axborot Texnologiyalari Universiteti</option>
                            <option value="NUUz">NUUz - O'zbekiston Milliy Universiteti</option>
                            <option value="TDTU">TDTU - Toshkent Davlat Texnika Universiteti</option>
                            <option value="UzMU">UzMU - O'zbekiston Milliy Universiteti</option>
                            <option value="TIMI">TIMI - Toshkent Irrigatsiya va Melioratsiya Instituti</option>
                            <option value="other">Boshqa</option>
                        </select>
                    </div>

                    <div>
                        <label for="course" class="block text-sm font-medium text-gray-700 mb-2">Kurs *</label>
                        <select id="course" name="course" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Tanlang</option>
                            <option value="1">1-kurs</option>
                            <option value="2">2-kurs</option>
                            <option value="3">3-kurs</option>
                            <option value="4">4-kurs</option>
                            <option value="5">5-kurs</option>
                            <option value="magistr">Magistratura</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="faculty" class="block text-sm font-medium text-gray-700 mb-2">Fakultet/Yo'nalish</label>
                    <input type="text" id="faculty" name="faculty"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masalan: Kompyuter injiniringi">
                </div>
            </div>

            <!-- Housing Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Yashash Joyi Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="house" class="block text-sm font-medium text-gray-700 mb-2">Uy *</label>
                        <select id="house" name="house" required onchange="updateRooms()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Uyni tanlang</option>
                            <option value="1" data-address="Chilonzor tumani, Qatortol ko'chasi" data-available="2">1-uy (2 ta bo'sh xona)</option>
                            <option value="2" data-address="Yunusobod tumani, Bog'ishamol ko'chasi" data-available="3">2-uy (3 ta bo'sh xona)</option>
                            <option value="3" data-address="Mirzo Ulug'bek tumani, Universitet ko'chasi" data-available="2">3-uy (2 ta bo'sh xona)</option>
                            <option value="4" data-address="Shayxontohur tumani, Navoi ko'chasi" data-available="6">4-uy (6 ta bo'sh xona)</option>
                        </select>
                    </div>

                    <div>
                        <label for="room" class="block text-sm font-medium text-gray-700 mb-2">Xona *</label>
                        <select id="room" name="room" required disabled
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:bg-gray-100">
                            <option value="">Avval uyni tanlang</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <div id="houseAddress" class="text-sm text-gray-600 bg-gray-50 p-3 rounded-md hidden">
                        <strong>Manzil:</strong> <span id="addressText"></span>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="monthlyRent" class="block text-sm font-medium text-gray-700 mb-2">Oylik ijara haqi *</label>
                    <div class="relative">
                        <input type="number" id="monthlyRent" name="monthlyRent" required value="1250000"
                               class="w-full px-3 py-2 pr-16 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <span class="absolute right-3 top-2 text-gray-500 text-sm">so'm</span>
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">To'lov Ma'lumotlari</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="paymentDate" class="block text-sm font-medium text-gray-700 mb-2">Oylik to'lov sanasi *</label>
                        <select id="paymentDate" name="paymentDate" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Tanlang</option>
                            <option value="1">Har oyning 1-sanasi</option>
                            <option value="5">Har oyning 5-sanasi</option>
                            <option value="10">Har oyning 10-sanasi</option>
                            <option value="15">Har oyning 15-sanasi</option>
                            <option value="20">Har oyning 20-sanasi</option>
                            <option value="25">Har oyning 25-sanasi</option>
                        </select>
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
            </div>

            <!-- Additional Information -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Qo'shimcha Ma'lumotlar</h3>

                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Izohlar</label>
                    <textarea id="notes" name="notes" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Qo'shimcha ma'lumotlar, maxsus talablar yoki izohlar..."></textarea>
                </div>

                <div class="mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" id="agreement" name="agreement" required
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">
                                Men ijara shartnomasining barcha shartlari bilan tanishganman va roziman *
                            </span>
                    </label>
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
                        Ro'yxatdan O'tkazish
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Success Modal (Hidden by default) -->
    <div id="successModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 max-w-md mx-4">
            <div class="text-center">
                <div class="text-green-500 text-6xl mb-4">✅</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Muvaffaqiyatli ro'yxatdan o'tdi!</h3>
                <p class="text-gray-600 mb-4">Yangi bola tizimga muvaffaqiyatli qo'shildi.</p>
                <div class="flex space-x-4">
                    <button onclick="addAnother()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Yana qo'shish
                    </button>
                    <button onclick="goToDashboard()" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                        Bosh sahifaga
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Room data for each house
    const houseRooms = {
        '1': ['1-xona', '2-xona'],
        '2': ['1-xona', '3-xona', '4-xona'],
        '3': ['2-xona', '3-xona'],
        '4': ['1-xona', '2-xona', '3-xona', '4-xona', '5-xona', '6-xona']
    };

    // Update rooms when house is selected
    function updateRooms() {
        const houseSelect = document.getElementById('house');
        const roomSelect = document.getElementById('room');
        const houseAddress = document.getElementById('houseAddress');
        const addressText = document.getElementById('addressText');

        const selectedHouse = houseSelect.value;
        const selectedOption = houseSelect.options[houseSelect.selectedIndex];

        // Clear room options
        roomSelect.innerHTML = '<option value="">Xonani tanlang</option>';

        if (selectedHouse) {
            // Enable room select
            roomSelect.disabled = false;

            // Add room options
            const rooms = houseRooms[selectedHouse];
            rooms.forEach(room => {
                const option = document.createElement('option');
                option.value = room;
                option.textContent = room;
                roomSelect.appendChild(option);
            });

            // Show address
            const address = selectedOption.getAttribute('data-address');
            addressText.textContent = address;
            houseAddress.classList.remove('hidden');
        } else {
            // Disable room select
            roomSelect.disabled = true;
            houseAddress.classList.add('hidden');
        }
    }

    // Form submission
    document.getElementById('childRegistrationForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Validate form
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
        submitButton.textContent = 'Ro\'yxatdan o\'tkazilmoqda...';

        setTimeout(() => {
            // Show success modal
            document.getElementById('successModal').classList.remove('hidden');
            document.getElementById('successModal').classList.add('flex');

            // Reset button
            submitButton.disabled = false;
            submitButton.textContent = 'Ro\'yxatdan O\'tkazish';
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
        document.getElementById('childRegistrationForm').reset();
        document.getElementById('room').disabled = true;
        document.getElementById('houseAddress').classList.add('hidden');
    }

    function goToDashboard() {
        window.location.href = 'index.html';
    }

    // Phone number formatting
    document.getElementById('phone').addEventListener('input', function() {
        let value = this.value.replace(/\D/g, '');
        if (value.startsWith('998')) {
            value = '+' + value.slice(0, 3) + ' ' + value.slice(3, 5) + ' ' + value.slice(5, 8) + ' ' + value.slice(8, 10) + ' ' + value.slice(10, 12);
        }
        this.value = value;
    });

    document.getElementById('parentPhone').addEventListener('input', function() {
        let value = this.value.replace(/\D/g, '');
        if (value.startsWith('998')) {
            value = '+' + value.slice(0, 3) + ' ' + value.slice(3, 5) + ' ' + value.slice(5, 8) + ' ' + value.slice(8, 10) + ' ' + value.slice(10, 12);
        }
        this.value = value;
    });

    // Auto-fill university when "other" is selected
    document.getElementById('university').addEventListener('change', function() {
        if (this.value === 'other') {
            const customUniversity = prompt('Universitet nomini kiriting:');
            if (customUniversity) {
                const option = document.createElement('option');
                option.value = customUniversity;
                option.textContent = customUniversity;
                option.selected = true;
                this.insertBefore(option, this.lastElementChild);
            }
        }
    });
</script>
</body>
</html>
