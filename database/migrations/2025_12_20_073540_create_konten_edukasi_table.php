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
        Schema::create('konten_edukasi', function (Blueprint $table) {
            $table->id('id_konten');
            $table->string('judul', 200);
            $table->enum('kategori', ['Resep MPASI', 'Tips Parenting', 'Video Stimulasi', 'Artikel']);
            $table->integer('rentang_usia_min')->nullable();
            $table->integer('rentang_usia_max')->nullable();
            $table->text('isi_konten');
            $table->string('url_media', 255)->nullable();
            $table->text('bahan')->nullable();
            $table->text('cara_membuat')->nullable();
            $table->string('validator', 100)->nullable();
            $table->enum('status', ['Draft', 'Review', 'Published', 'Inactive'])->default('Draft');

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
        Schema::dropIfExists('konten_edukasi');
    }
};
