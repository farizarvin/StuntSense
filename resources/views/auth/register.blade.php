@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-2xl">
        <!-- Card -->
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-400 to-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Daftar Akun Baru</h1>
                <p class="text-gray-500">Mulai pantau pertumbuhan anak Anda</p>
            </div>

            <!-- Form -->
            <form action="{{ url('/user/dashboard') }}" method="GET">
                <!-- Section: Data Ibu -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold text-gray-900">Data Ibu/Wali</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Nama lengkap ibu">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email / No HP</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="email@contoh.com">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Minimal 8 karakter">
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-gray-100 my-6"></div>

                <!-- Section: Data Anak -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 bg-coral-100 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-coral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold text-gray-900">Data Profil Anak</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Anak</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Nama lengkap anak">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                            <input type="date" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                            <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none bg-white">
                                <option value="">Pilih jenis kelamin</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Berat Lahir (kg)</label>
                            <input type="number" step="0.1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Contoh: 3.2">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tinggi Lahir (cm)</label>
                            <input type="number" step="0.1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Contoh: 50">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3.5 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-primary-500/25 transition-all"
                >
                    Daftar & Mulai
                </button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-gray-600">
                    Sudah punya akun?
                    <a href="{{ url('/login') }}" class="font-semibold text-primary-600 hover:text-primary-700">Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection