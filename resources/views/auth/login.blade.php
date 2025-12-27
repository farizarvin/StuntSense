@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-400 to-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Selamat Datang Kembali</h1>
                <p class="text-gray-500">Masuk ke akun StuntSense Anda</p>
            </div>

            <!-- Form -->
            <form action="{{ url('/user/dashboard') }}" method="GET">
                <div class="space-y-5">
                    <!-- Email / Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email atau Nomor HP</label>
                        <input 
                            type="text" 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none"
                            placeholder="Masukkan email atau nomor HP"
                        >
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-primary-600 hover:text-primary-700">Lupa password?</a>
                        </div>
                        <input 
                            type="password" 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none"
                            placeholder="Masukkan password"
                        >
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="w-4 h-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Ingat saya</label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-3.5 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-primary-500/25 transition-all"
                    >
                        Masuk
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="bg-white px-4 text-gray-500">atau</span>
                </div>
            </div>

            <!-- Register Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    Belum punya akun?
                    <a href="{{ url('/register') }}" class="font-semibold text-primary-600 hover:text-primary-700">Daftar sekarang</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection