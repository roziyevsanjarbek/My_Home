<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xush Kelibsiz - Bolalar Ijara Tizimi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#6b7280',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
<!-- Header -->
<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">🏠</span>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Bolalar Ijara Tizimi</h1>
            </div>
            <div class="flex items-center space-x-4">
                <button class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                    Yordam
                </button>
                <button class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                    Aloqa
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center animate-fade-in">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 animate-bounce-slow">
                    <span class="text-4xl">🎓</span>
                </div>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-slide-up">
                Xush Kelibsiz!
            </h1>
            <p class="text-xl md:text-2xl text-white text-opacity-90 mb-8 max-w-3xl mx-auto animate-slide-up">
                Talaba bolalar uchun ijara uylarini boshqarish tizimiga xush kelibsiz.
                Bu yerda siz barcha ijara jarayonlarini oson va samarali boshqarishingiz mumkin.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="index.html" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors shadow-lg">
                    🚀 Boshqaruv Paneliga O'tish
                </a>
                <button onclick="scrollToFeatures()" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition-colors">
                    📖 Ko'proq Ma'lumot
                </button>
            </div>
        </div>
    </div>

    <!-- Decorative elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full animate-bounce"></div>
    <div class="absolute bottom-10 right-10 w-16 h-16 bg-white bg-opacity-10 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-20 w-12 h-12 bg-white bg-opacity-10 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Nima Uchun Bizning Tizim?
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Talaba bolalar uchun ijara uylarini boshqarishda eng zamonaviy va qulay yechimlar
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">👥</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ijarachilar Boshqaruvi</h3>
                <p class="text-gray-600 mb-6">
                    Har bir bolaning ma'lumotlarini, to'lov tarixini va aloqa ma'lumotlarini oson boshqaring
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Profil</span>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">To'lovlar</span>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">🏠</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Uylar Nazorati</h3>
                <p class="text-gray-600 mb-6">
                    Barcha ijara uylaringizni, xonalarni va ularning bandlik holatini real vaqtda kuzating
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Bandlik</span>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">Holat</span>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">💰</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Moliyaviy Hisobotlar</h3>
                <p class="text-gray-600 mb-6">
                    Oylik daromadlar, to'lovlar tarixi va moliyaviy statistikalarni ko'ring
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Daromad</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-sm rounded-full">Statistika</span>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">📱</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Mobil Uyg'un</h3>
                <p class="text-gray-600 mb-6">
                    Har qanday qurilmadan - telefon, planshet yoki kompyuterdan foydalaning
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-teal-100 text-teal-800 text-sm rounded-full">Responsive</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-800 text-sm rounded-full">Qulay</span>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">🔔</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Avtomatik Eslatmalar</h3>
                <p class="text-gray-600 mb-6">
                    To'lov muddatlari yaqinlashganda avtomatik eslatmalar va bildirishnomalar
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-pink-100 text-pink-800 text-sm rounded-full">SMS</span>
                    <span class="px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Email</span>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">📊</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Tahlil va Statistika</h3>
                <p class="text-gray-600 mb-6">
                    Biznesingizni rivojlantirish uchun batafsil tahlillar va hisobotlar
                </p>
                <div class="flex justify-center space-x-2">
                    <span class="px-3 py-1 bg-lime-100 text-lime-800 text-sm rounded-full">Grafik</span>
                    <span class="px-3 py-1 bg-rose-100 text-rose-800 text-sm rounded-full">Tahlil</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Bizning Natijalarimiz
            </h2>
            <p class="text-xl text-gray-600">
                Raqamlar orqali bizning muvaffaqiyatimizni ko'ring
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2" id="counter1">0</div>
                <div class="text-gray-600 font-medium">Faol Ijarachilar</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-green-600 mb-2" id="counter2">0</div>
                <div class="text-gray-600 font-medium">Boshqarilayotgan Uylar</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-purple-600 mb-2" id="counter3">0</div>
                <div class="text-gray-600 font-medium">Oylik Daromad (mln)</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-red-600 mb-2" id="counter4">0</div>
                <div class="text-gray-600 font-medium">To'lov Muvaffaqiyati (%)</div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Tezkor Amallar
            </h2>
            <p class="text-xl text-gray-600">
                Eng ko'p ishlatiladigan funksiyalarga tezkor kirish
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="register-child.html" class="bg-blue-50 hover:bg-blue-100 rounded-xl p-6 text-center transition-colors card-hover group">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white text-xl">👤</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Yangi Ijarachi</h3>
                <p class="text-sm text-gray-600">Yangi bola qo'shish</p>
            </a>

            <a href="add-house.html" class="bg-green-50 hover:bg-green-100 rounded-xl p-6 text-center transition-colors card-hover group">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white text-xl">🏠</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Yangi Uy</h3>
                <p class="text-sm text-gray-600">Uy qo'shish</p>
            </a>

            <a href="tenants-list.html" class="bg-purple-50 hover:bg-purple-100 rounded-xl p-6 text-center transition-colors card-hover group">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white text-xl">📋</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Ijarachilar</h3>
                <p class="text-sm text-gray-600">Ro'yxatni ko'rish</p>
            </a>

            <a href="houses-list.html" class="bg-yellow-50 hover:bg-yellow-100 rounded-xl p-6 text-center transition-colors card-hover group">
                <div class="w-12 h-12 bg-yellow-600 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white text-xl">🏘️</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Uylar</h3>
                <p class="text-sm text-gray-600">Uylar ro'yxati</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Hoziroq Boshlang!
        </h2>
        <p class="text-xl text-white text-opacity-90 mb-8">
            Ijara biznesingizni yangi darajaga olib chiqish uchun bizning tizimdan foydalanishni boshlang
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="index.html" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors shadow-lg">
                🚀 Boshqaruv Paneliga Kirish
            </a>
            <button class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition-colors">
                📞 Yordam Olish
            </button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold">🏠</span>
                    </div>
                    <h3 class="text-lg font-semibold">Bolalar Ijara Tizimi</h3>
                </div>
                <p class="text-gray-400">
                    Talaba bolalar uchun ijara uylarini boshqarishda eng yaxshi yechim
                </p>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Tezkor Havolalar</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="index.html" class="hover:text-white transition-colors">Bosh sahifa</a></li>
                    <li><a href="tenants-list.html" class="hover:text-white transition-colors">Ijarachilar</a></li>
                    <li><a href="houses-list.html" class="hover:text-white transition-colors">Uylar</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Hisobotlar</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Aloqa</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>📧 info@ijaratizimi.uz</li>
                    <li>📞 +998 90 123 45 67</li>
                    <li>📍 Toshkent, O'zbekiston</li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2024 Bolalar Ijara Tizimi. Barcha huquqlar himoyalangan.</p>
        </div>
    </div>
</footer>

<script>
    // Smooth scrolling
    function scrollToFeatures() {
        document.getElementById('features').scrollIntoView({
            behavior: 'smooth'
        });
    }

    // Counter animation
    function animateCounter(elementId, targetValue, duration = 2000) {
        const element = document.getElementById(elementId);
        const startValue = 0;
        const increment = targetValue / (duration / 16);
        let currentValue = startValue;

        const timer = setInterval(() => {
            currentValue += increment;
            if (currentValue >= targetValue) {
                currentValue = targetValue;
                clearInterval(timer);
            }
            element.textContent = Math.floor(currentValue);
        }, 16);
    }

    // Intersection Observer for counter animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate counters
                animateCounter('counter1', 150);
                animateCounter('counter2', 25);
                animateCounter('counter3', 45);
                animateCounter('counter4', 95);

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Start observing when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        const statsSection = document.querySelector('#counter1').closest('section');
        observer.observe(statsSection);
    });

    // Add scroll effect to navbar
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
    });
</script>
</body>
</html>
