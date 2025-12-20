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
        Schema::create('tracking_nutrisi', function (Blueprint $table) {
            $table->id('id_nutrisi');
            $table->foreignId('id_anak')->constrained('data_anak', 'id_anak')->onDelete('cascade');
            $table->date('tanggal_makan');
            $table->enum('waktu_makan', ['Pagi', 'Siang', 'Malam', 'Snack']);
            $table->string('nama_menu', 150);
            $table->string('porsi', 50)->nullable();
            $table->decimal('total_kalori', 6, 2)->nullable();

            // HANYA CREATED_AT:
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_nutrisi');
    }
};
