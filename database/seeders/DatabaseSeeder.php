<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ==========================================
        // 1. DATA USERS (Ada kolom created_at & updated_at)
        // ==========================================

        // User ID 1: Admin System
        DB::table('users')->insert([
            'id_user' => 1,
            'nama_lengkap' => 'Admin System',
            'email' => 'admin@stuntsense.com',
            'password' => Hash::make('password123'),
            'role' => 'super_admin',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User ID 2: Kader Siti
        DB::table('users')->insert([
            'id_user' => 2,
            'nama_lengkap' => 'Kader Siti',
            'email' => 'kader.siti@posyandu.com',
            'nomor_hp' => '081234567890',
            'password' => Hash::make('password123'),
            'role' => 'mitra_posyandu',
            'kode_posyandu' => 'POS001',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User ID 3: Ibu Rina
        DB::table('users')->insert([
            'id_user' => 3,
            'nama_lengkap' => 'Ibu Rina',
            'email' => 'rina@example.com',
            'nomor_hp' => '081234567891',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ==========================================
        // 2. DATA POSYANDU (HANYA created_at, TANPA updated_at)
        // ==========================================
        DB::table('posyandu')->insert([
            'id_posyandu' => 1,
            'nama_posyandu' => 'Posyandu Melati',
            'alamat' => 'Jl. Mawar No. 10, Desa Melati',
            'kontak' => '081234567890',
            'id_penanggung_jawab' => 2, // Mengarah ke Kader Siti

            // JANGAN TAMBAHKAN 'updated_at' DI SINI!
            'created_at' => now(),
        ]);

        // ==========================================
        // 3. KONTEN EDUKASI (Ada kolom created_at & updated_at)
        // ==========================================
        DB::table('konten_edukasi')->insert([
            'judul' => 'Resep MPASI Pisang Alpukat',
            'kategori' => 'Resep MPASI',
            'rentang_usia_min' => 6,
            'rentang_usia_max' => 12,
            'isi_konten' => 'MPASI bergizi untuk bayi 6-12 bulan',
            'validator' => 'dr. Nurul, Sp.GK',
            'status' => 'Published',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
