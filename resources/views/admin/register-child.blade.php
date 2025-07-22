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
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Telefon Raqami <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" id="phone" name="phone" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="+998 90 123 45 67">
                                </div>

                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
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
</div>
<x-admin.footer></x-admin.footer>

