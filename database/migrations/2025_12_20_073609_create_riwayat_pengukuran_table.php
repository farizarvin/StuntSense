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
        Schema::create('riwayat_pengukuran', function (Blueprint $table) {
            $table->id('id_pengukuran');
            $table->foreignId('id_anak')->constrained('data_anak', 'id_anak')->onDelete('cascade');
            $table->date('tanggal_ukur');
            $table->decimal('tinggi_badan', 5, 2);
            $table->decimal('berat_badan', 5, 2);
            $table->decimal('lingkar_kepala', 5, 2)->nullable();
            $table->string('foto_path', 255)->nullable();
            $table->enum('status_gizi', ['Normal', 'Tall', 'Stunted', 'Severely Stunted'])->nullable();

            // HANYA CREATED_AT:
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pengukuran');
    }
};
