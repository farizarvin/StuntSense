@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Dashboard Posyandu Mawar</h1>
        <p class="text-gray-500">Kelola jadwal dan data balita di wilayah Anda</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <!-- Total Balita -->
        <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-primary-100 text-sm font-medium mb-1">Total Balita</p>
                    <h2 class="text-4xl font-bold">50</h2>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Terindikasi Stunting -->
        <div class="bg-gradient-to-br from-coral-400 to-coral-500 rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-coral-100 text-sm font-medium mb-1">Terindikasi Stunting</p>
                    <h2 class="text-4xl font-bold">5</h2>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Agenda Bulan Ini -->
        <div class="bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-amber-100 text-sm font-medium mb-1">Agenda Bulan Ini</p>
                    <h2 class="text-4xl font-bold">12</h2>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="grid lg:grid-cols-2 gap-6">
        <!-- Jadwal Kegiatan -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Jadwal Kegiatan</h3>
                    <p class="text-gray-500 text-sm">Manajemen agenda Posyandu</p>
                </div>
                <button class="px-4 py-2 bg-primary-500 text-white text-sm font-medium rounded-xl hover:bg-primary-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Tambah
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Kegiatan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Layanan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">Posyandu Mawar - Vitamin A</td>
                            <td class="px-6 py-4 text-sm text-gray-500">20 Jan 2025</td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">Imunisasi</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">Penimbangan Rutin</td>
                            <td class="px-6 py-4 text-sm text-gray-500">25 Jan 2025</td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Pengukuran</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Input Data Manual -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-900">Input Data Balita</h3>
                <p class="text-gray-500 text-sm">Untuk ibu yang tidak memiliki aplikasi</p>
            </div>
            <div class="p-6">
                <form>
                    <div class="flex gap-3 mb-6">
                        <input type="text" placeholder="Cari nama anak..." class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-400 focus:ring-4 focus:ring-primary-100 transition-all outline-none">
                        <button type="submit" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-xl hover:bg-gray-200 transition-colors">
                            Cari
                        </button>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-6 text-center">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <p class="text-gray-400 text-sm">Cari nama anak untuk input data</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection