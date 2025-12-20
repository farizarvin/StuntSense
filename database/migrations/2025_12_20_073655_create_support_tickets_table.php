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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id('id_tiket');
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->enum('role_pelapor', ['user', 'mitra_posyandu']);
            $table->enum('kategori', ['Technical', 'Data', 'Account', 'Content']);
            $table->string('subjek', 200);
            $table->text('deskripsi');
            $table->string('bukti_gambar', 255)->nullable();
            $table->enum('status', ['Open', 'In Progress', 'Resolved', 'Closed', 'Rejected'])->default('Open');
            $table->text('balasan_admin')->nullable();

            // CUSTOM NAMES INDONESIA:
            $table->timestamp('tanggal_dibuat')->useCurrent();
            $table->timestamp('tanggal_update')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_tickets');
    }
};
