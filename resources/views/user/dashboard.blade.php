@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-64 flex-shrink-0">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 sticky top-24">
                <nav class="space-y-1">
                    <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-600 text-white font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('user.check') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Deteksi Stunting
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Tracking Nutrisi
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Edukasi & Resep
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Pusat Bantuan
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Greeting -->
            <div class="mb-8">
                <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Halo, Bunda! 👋</h1>
                <p class="text-gray-500">Selamat datang kembali. Berikut ringkasan kesehatan anak Anda.</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <!-- Status Gizi -->
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-primary-100 text-sm font-medium mb-1">Status Gizi Terakhir</p>
                            <h2 class="text-3xl font-bold mb-2">Normal</h2>
                            <p class="text-primary-100 text-sm">Berdasarkan pengukuran terakhir</p>
                        </div>
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Imunisasi -->
                <div class="bg-white rounded-2xl p-6 border-2 border-amber-200 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="inline-flex items-center gap-2 px-2.5 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full mb-3">
                                <span class="w-1.5 h-1.5 bg-amber-500 rounded-full animate-pulse"></span>
                                Jadwal Terdekat
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Imunisasi DPT-HB-Hib 1</h3>
                            <p class="text-gray-500 text-sm">25 Desember 2025 • Posyandu Melati</p>
                        </div>
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Growth Chart -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Grafik Pertumbuhan</h3>
                        <p class="text-gray-500 text-sm">Berat badan dan tinggi badan anak</p>
                    </div>
                    <select class="px-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:border-primary-400">
                        <option>6 Bulan Terakhir</option>
                        <option>12 Bulan Terakhir</option>
                        <option>Semua Data</option>
                    </select>
                </div>
                
                <!-- Chart Placeholder -->
                <div class="h-64 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <p class="text-gray-400 text-sm">Grafik pertumbuhan akan ditampilkan di sini</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection