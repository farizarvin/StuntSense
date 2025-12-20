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
        Schema::create('deteksi_ai', function (Blueprint $table) {
            $table->id('id_log'); // Primary Key
            $table->foreignId('id_anak')->constrained('data_anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_pengukuran')->constrained('riwayat_pengukuran', 'id_pengukuran')->onDelete('cascade');
            $table->string('input_gambar', 255)->nullable();
            $table->decimal('tinggi_badan', 5, 2);
            $table->decimal('berat_badan', 5, 2);
            $table->enum('hasil_prediksi', ['Normal', 'Tall', 'Stunted', 'Severely Stunted']);
            $table->decimal('confidence_score', 5, 2)->nullable();
            $table->text('rekomendasi')->nullable();

            // CUSTOM NAME: 'timestamp'
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deteksi_ai');
    }
};
