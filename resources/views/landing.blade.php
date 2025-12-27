@extends('layouts.app')

@section('content')
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

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Fitur Unggulan</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Solusi lengkap untuk memantau dan mencegah stunting pada anak</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 bg-gradient-to-br from-gray-50 to-white rounded-3xl border border-gray-100 hover:shadow-xl hover:shadow-primary-500/10 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-primary-400 to-primary-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Deteksi AI</h3>
                <p class="text-gray-600">Analisis cerdas menggunakan teknologi AI untuk mendeteksi risiko stunting secara akurat</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group p-8 bg-gradient-to-br from-gray-50 to-white rounded-3xl border border-gray-100 hover:shadow-xl hover:shadow-coral-500/10 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-coral-400 to-coral-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Tracking Nutrisi</h3>
                <p class="text-gray-600">Pantau asupan gizi harian anak dan dapatkan rekomendasi makanan bergizi</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="group p-8 bg-gradient-to-br from-gray-50 to-white rounded-3xl border border-gray-100 hover:shadow-xl hover:shadow-amber-500/10 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Jadwal Posyandu</h3>
                <p class="text-gray-600">Integrasi dengan jadwal Posyandu untuk imunisasi dan pemeriksaan rutin</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gradient-to-r from-primary-600 to-primary-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-white mb-2">10K+</div>
                <div class="text-primary-100">Pengguna Aktif</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-white mb-2">500+</div>
                <div class="text-primary-100">Posyandu Terdaftar</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-white mb-2">95%</div>
                <div class="text-primary-100">Akurasi Deteksi</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-white mb-2">34</div>
                <div class="text-primary-100">Provinsi</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Mulai Pantau Kesehatan Anak Anda
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            Bergabunglah dengan ribuan orang tua yang telah mempercayakan StuntSense untuk memantau pertumbuhan anak mereka
        </p>
        <a href="{{ url('/register') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-2xl hover:shadow-xl hover:shadow-primary-500/25 transition-all transform hover:-translate-y-0.5">
            Daftar Gratis Sekarang
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection