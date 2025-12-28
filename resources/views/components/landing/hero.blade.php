<!-- Hero Section -->
<section class="relative overflow-hidden">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-coral-50"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-primary-200/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-coral-200/20 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    Platform Deteksi Dini Stunting
                </div>
                
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Lindungi Masa Depan
                    <span class="bg-gradient-to-r from-primary-500 to-primary-600 bg-clip-text text-transparent">Anak Indonesia</span>
                </h1>
                
                <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0">
                    Deteksi risiko stunting sejak dini dengan teknologi AI. Pantau pertumbuhan anak dan dapatkan rekomendasi nutrisi yang tepat.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ url('/register') }}" class="px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-2xl hover:shadow-xl hover:shadow-primary-500/25 transition-all transform hover:-translate-y-0.5">
                        Mulai Sekarang
                        <span class="ml-2">→</span>
                    </a>
                    <a href="{{ url('/login') }}" class="px-8 py-4 bg-white text-gray-700 font-semibold rounded-2xl border-2 border-gray-200 hover:border-primary-300 hover:text-primary-600 transition-all">
                        Sudah Punya Akun
                    </a>
                </div>
            </div>
            
            <!-- Right Illustration -->
            <div class="relative hidden lg:block">
                <div class="relative w-full aspect-square max-w-md mx-auto">
                    <!-- Decorative circles -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-400 to-primary-600 rounded-3xl transform rotate-6 opacity-20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-300 to-primary-500 rounded-3xl transform -rotate-3 opacity-30"></div>
                    <div class="absolute inset-0 bg-white rounded-3xl shadow-2xl flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-primary-100 to-primary-200 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Tumbuh Sehat</h3>
                            <p class="text-gray-500 text-sm">Pantau pertumbuhan anak dengan mudah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
