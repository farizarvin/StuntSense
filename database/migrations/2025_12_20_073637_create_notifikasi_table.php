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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id('id_notifikasi');
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->enum('tipe_notifikasi', ['Reminder', 'System', 'Alert', 'Content']);
            $table->string('judul', 200);
            $table->text('isi_pesan');
            $table->string('link_action', 255)->nullable();
            $table->enum('status_baca', ['Read', 'Unread'])->default('Unread');
            $table->enum('channel', ['In-App', 'Email', 'WA'])->default('In-App');

            // HANYA CREATED_AT:
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
