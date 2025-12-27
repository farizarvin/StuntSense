@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-gradient-to-br from-primary-400 to-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
        </div>
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Deteksi Stunting AI</h1>
        <p class="text-gray-500 max-w-md mx-auto">Masukkan data pengukuran untuk menganalisis risiko stunting pada anak</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-6 lg:p-8">
        <form>
            <!-- Step Indicator -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-primary-500 text-white rounded-full flex items-center justify-center text-sm font-semibold">1</div>
                    <span class="text-sm font-medium text-gray-700 hidden sm:inline">Data Dasar</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-200"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">2</div>
                    <span class="text-sm font-medium text-gray-400 hidden sm:inline">Upload Foto</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-200"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">3</div>
                    <span class="text-sm font-medium text-gray-400 hidden sm:inline">Hasil</span>
                </div>
            </div>

            <!-- Form Fields -->
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Pengukuran</label>
                    <input type="date" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none bg-white" required>
                        <option value="" selected disabled>Pilih jenis kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Umur (bulan)</label>
                    <input type="number" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Contoh: 24" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tinggi Badan (cm)</label>
                    <input type="number" step="0.1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Contoh: 85.5" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Berat Badan (kg)</label>
                    <input type="number" step="0.1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none" placeholder="Contoh: 12.5" required>
                </div>
            </div>

            <!-- Photo Upload -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Foto Anak (Full Body)</label>
                <div class="border-2 border-dashed border-gray-200 rounded-2xl p-8 text-center hover:border-primary-300 transition-colors cursor-pointer">
                    <input type="file" id="photo" class="hidden" accept="image/*">
                    <label for="photo" class="cursor-pointer">
                        <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-1">Klik untuk upload atau drag & drop</p>
                        <p class="text-gray-400 text-sm">PNG, JPG hingga 10MB</p>
                    </label>
                </div>
                <p class="mt-2 text-sm text-coral-500 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    Pastikan foto seluruh badan terlihat jelas
                </p>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-primary-500/25 transition-all flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Mulai Analisis AI
            </button>
        </form>

        <!-- Result Area (Hidden by default) -->
        <div class="mt-8 p-6 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl border border-green-200 hidden" id="resultArea">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Hasil Analisis</h3>
                    <p class="text-gray-600 mb-3">Status Prediksi: <span class="font-semibold text-green-600">Normal</span> (Akurasi: 95%)</p>
                    <p class="text-gray-500 text-sm">Rekomendasi: Pertahankan gizi seimbang dan rutin kontrol ke Posyandu.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Link -->
    <div class="text-center mt-6">
        <a href="{{ route('user.dashboard') }}" class="text-gray-500 hover:text-primary-600 transition-colors inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection