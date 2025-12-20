<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_posyandu', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('id_posyandu')->constrained('posyandu', 'id_posyandu')->onDelete('cascade');
            $table->string('nama_kegiatan', 150);
            $table->date('tanggal_kegiatan');
            $table->time('jam_mulai');
            $table->text('lokasi');
            $table->enum('jenis_layanan', ['Imunisasi', 'Penimbangan', 'Konsultasi', 'Lainnya']);

            // HANYA CREATED_AT:
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_posyandu');
    }
};
