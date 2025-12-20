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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // Primary Key
            $table->string('nama_lengkap', 100);
            $table->string('email', 100)->unique();
            $table->string('nomor_hp', 20)->nullable();
            $table->string('password', 255);
            $table->enum('role', ['user', 'mitra_posyandu', 'super_admin']);
            $table->string('kode_posyandu', 50)->nullable();
            $table->enum('status', ['active', 'suspended'])->default('active');

            // SAMA PERSIS SQL:
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
