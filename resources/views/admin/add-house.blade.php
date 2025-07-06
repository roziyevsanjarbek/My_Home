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
        <x-admin.navbar></x-admin.navbar>

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
</div>
<x-admin.footer></x-admin.footer>

