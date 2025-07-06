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
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Profil Ma'lumotlari</h1>
                    <p class="text-gray-600">Shaxsiy ma'lumotlaringizni boshqaring va yangilang</p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <!-- Profile Header Card -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-8">
                        <div class="h-32 bg-gradient-to-r from-blue-500 to-purple-600"></div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center -mt-16 mb-6">
                                <div class="relative">
                                    <div class="w-32 h-32 bg-white rounded-full border-4 border-white shadow-lg flex items-center justify-center">
                                        <div class="w-28 h-28 bg-blue-600 rounded-full flex items-center justify-center">
                                            <span class="text-white text-3xl font-bold">AK</span>
                                        </div>
                                    </div>
                                    <button class="absolute bottom-2 right-2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="ml-6 mt-16">
                                    <h2 class="text-2xl font-bold text-gray-900">Akmal Karimov</h2>
                                    <p class="text-gray-600">Tizim Administratori</p>
                                    <div class="flex items-center mt-2 space-x-4">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Faol
                                            </span>
                                        <span class="text-sm text-gray-500">Oxirgi kirish: 2 daqiqa oldin</span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-gray-900">4</div>
                                    <div class="text-sm text-gray-600">Boshqariladigan Uylar</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-gray-900">15</div>
                                    <div class="text-sm text-gray-600">Jami Ijarachilar</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-gray-900">2.5</div>
                                    <div class="text-sm text-gray-600">Yillik Tajriba</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Form -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Personal Information -->
                        <div class="lg:col-span-2">
                            <form id="profileForm" class="space-y-8">
                                <!-- Basic Information -->
                                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Asosiy Ma'lumotlar</h3>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                                                Ism <span class="text-red-500">*</span>
                                            </label>
                                            <input type="text" id="firstName" name="firstName" value="Akmal" required
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                                Familiya <span class="text-red-500">*</span>
                                            </label>
                                            <input type="text" id="lastName" name="lastName" value="Karimov" required
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                                Email <span class="text-red-500">*</span>
                                            </label>
                                            <input type="email" id="email" name="email" value="akmal.karimov@example.com" required
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                                Telefon <span class="text-red-500">*</span>
                                            </label>
                                            <input type="tel" id="phone" name="phone" value="+998 90 123 45 67" required
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div>
                                            <label for="birthDate" class="block text-sm font-medium text-gray-700 mb-2">
                                                Tug'ilgan Sana
                                            </label>
                                            <input type="date" id="birthDate" name="birthDate" value="1990-05-15"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label for="position" class="block text-sm font-medium text-gray-700 mb-2">
                                                Lavozim
                                            </label>
                                            <select id="position" name="position"
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                                <option value="admin" selected>Tizim Administratori</option>
                                                <option value="manager">Menejer</option>
                                                <option value="accountant">Buxgalter</option>
                                                <option value="supervisor">Nazoratchi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Information -->
                                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Aloqa Ma'lumotlari</h3>

                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                                Manzil
                                            </label>
                                            <textarea id="address" name="address" rows="3"
                                                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                      placeholder="To'liq manzilni kiriting...">Toshkent shahar, Chilonzor tumani, Bunyodkor ko'chasi, 12-uy</textarea>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div>
                                            <label for="emergencyContact" class="block text-sm font-medium text-gray-700 mb-2">
                                                Favqulodda Aloqa
                                            </label>
                                            <input type="tel" id="emergencyContact" name="emergencyContact" value="+998 91 234 56 78"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label for="emergencyContactName" class="block text-sm font-medium text-gray-700 mb-2">
                                                Favqulodda Aloqa Ismi
                                            </label>
                                            <input type="text" id="emergencyContactName" name="emergencyContactName" value="Karim Karimov"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- Security Settings -->
                                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Xavfsizlik Sozlamalari</h3>

                                    <div class="space-y-6">
                                        <div>
                                            <label for="currentPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                                Joriy Parol
                                            </label>
                                            <input type="password" id="currentPassword" name="currentPassword"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                   placeholder="Joriy parolni kiriting">
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div>
                                                <label for="newPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                                    Yangi Parol
                                                </label>
                                                <input type="password" id="newPassword" name="newPassword"
                                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                       placeholder="Yangi parolni kiriting">
                                            </div>

                                            <div>
                                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                                    Parolni Tasdiqlash
                                                </label>
                                                <input type="password" id="confirmPassword" name="confirmPassword"
                                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                       placeholder="Parolni qayta kiriting">
                                            </div>
                                        </div>

                                        <div class="bg-blue-50 border border-blue-200 rounded-md p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <h3 class="text-sm font-medium text-blue-800">Parol Talablari</h3>
                                                    <div class="mt-2 text-sm text-blue-700">
                                                        <ul class="list-disc list-inside space-y-1">
                                                            <li>Kamida 8 ta belgi</li>
                                                            <li>Katta va kichik harflar</li>
                                                            <li>Kamida bitta raqam</li>
                                                            <li>Kamida bitta maxsus belgi</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="flex justify-end space-x-4">
                                    <button type="button" class="px-6 py-3 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                                        Bekor qilish
                                    </button>
                                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition-colors">
                                        O'zgarishlarni Saqlash
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Sidebar Information -->
                        <div class="space-y-6">
                            <!-- Account Status -->
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Hisob Holati</h3>

                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Hisob holati</span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Faol
                                            </span>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Ro'yxatdan o'tgan</span>
                                        <span class="text-sm text-gray-900">15.01.2022</span>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Oxirgi yangilanish</span>
                                        <span class="text-sm text-gray-900">10.01.2024</span>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Hisob turi</span>
                                        <span class="text-sm text-gray-900">Administrator</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Permissions -->
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Ruxsatlar</h3>

                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-700">Uylarni boshqarish</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-700">Ijarachilarni boshqarish</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-700">To'lovlarni ko'rish</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-700">Hisobotlarni yaratish</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-700">Tizim sozlamalari</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Activity Log -->
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">So'nggi Faoliyat</h3>

                                <div class="space-y-4">
                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-2 h-2 bg-green-400 rounded-full mt-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-900">Profil ma'lumotlari yangilandi</p>
                                            <p class="text-xs text-gray-500">2 soat oldin</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-2 h-2 bg-blue-400 rounded-full mt-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-900">Yangi ijarachi qo'shildi</p>
                                            <p class="text-xs text-gray-500">1 kun oldin</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-900">To'lov eslatmasi yuborildi</p>
                                            <p class="text-xs text-gray-500">2 kun oldin</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-2 h-2 bg-purple-400 rounded-full mt-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-900">Hisobot yaratildi</p>
                                            <p class="text-xs text-gray-500">3 kun oldin</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                                        Barcha faoliyatni ko'rish →
                                    </button>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Tezkor Amallar</h3>

                                <div class="space-y-3">
                                    <button class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-md transition-colors">
                                        📊 Hisobot yaratish
                                    </button>

                                    <button class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-md transition-colors">
                                        💬 SMS yuborish
                                    </button>

                                    <button class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-md transition-colors">
                                        🔔 Eslatma o'rnatish
                                    </button>

                                    <button class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-md transition-colors">
                                        ⚙️ Tizim sozlamalari
                                    </button>

                                    <button class="w-full text-left px-3 py-2 text-sm text-red-600 hover:bg-red-50 rounded-md transition-colors">
                                        🚪 Tizimdan chiqish
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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

    // Auto-format phone number
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

    // Apply phone formatting
    formatPhoneNumber(document.getElementById('phone'));
    formatPhoneNumber(document.getElementById('emergencyContact'));

    // Password validation
    function validatePassword() {
        const newPassword = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (newPassword && confirmPassword && newPassword !== confirmPassword) {
            document.getElementById('confirmPassword').setCustomValidity('Parollar mos kelmaydi');
        } else {
            document.getElementById('confirmPassword').setCustomValidity('');
        }
    }

    document.getElementById('newPassword').addEventListener('input', validatePassword);
    document.getElementById('confirmPassword').addEventListener('input', validatePassword);

    // Form submission
    document.getElementById('profileForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const profileData = {};

        // Convert form data to object
        for (let [key, value] of formData.entries()) {
            profileData[key] = value;
        }

        // Validate required fields
        const requiredFields = ['firstName', 'lastName', 'email', 'phone'];
        const missingFields = requiredFields.filter(field => !profileData[field]);

        if (missingFields.length > 0) {
            alert('Iltimos, barcha majburiy maydonlarni to\'ldiring!');
            return;
        }

        // Validate email format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(profileData.email)) {
            alert('Iltimos, to\'g\'ri email manzilini kiriting!');
            return;
        }

        // Validate password if provided
        if (profileData.newPassword) {
            if (!profileData.currentPassword) {
                alert('Yangi parol o\'rnatish uchun joriy parolni kiriting!');
                return;
            }

            if (profileData.newPassword.length < 8) {
                alert('Yangi parol kamida 8 ta belgidan iborat bo\'lishi kerak!');
                return;
            }

            if (profileData.newPassword !== profileData.confirmPassword) {
                alert('Yangi parol va tasdiqlash parollari mos kelmaydi!');
                return;
            }
        }

        // Simulate saving
        console.log('Profil ma\'lumotlari:', profileData);

        // Show success message
        alert('Profil ma\'lumotlari muvaffaqiyatli yangilandi!');

        // Clear password fields
        document.getElementById('currentPassword').value = '';
        document.getElementById('newPassword').value = '';
        document.getElementById('confirmPassword').value = '';
    });

    // Profile picture upload simulation
    document.querySelector('.absolute.bottom-2.right-2').addEventListener('click', function() {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        input.onchange = function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // In a real application, you would upload the image to a server
                    alert('Profil rasmi muvaffaqiyatli yangilandi!');
                };
                reader.readAsDataURL(file);
            }
        };
        input.click();
    });
</script>
</div>
<x-admin.footer></x-admin.footer>

