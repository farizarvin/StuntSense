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
        Schema::create('riwayat_imunisasi', function (Blueprint $table) {
            $table->id('id_imunisasi');
            $table->foreignId('id_anak')->constrained('data_anak', 'id_anak')->onDelete('cascade');
            $table->string('jenis_vaksin', 100);
            $table->date('tanggal_imunisasi');
            $table->enum('status', ['Sudah', 'Belum'])->default('Belum');
            $table->text('keterangan')->nullable();

            // HANYA CREATED_AT:
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_imunisasi');
    }
};
