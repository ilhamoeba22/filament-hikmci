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
        Schema::create('wakafs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar_cover');
            $table->string('gambar_detail');
            $table->text('deskripsi');
            $table->decimal('target', 20, 2);
            $table->string('lokasi');
            $table->string('nahzir');
            $table->enum('status', ['Terpenuhi', 'Belum Terpenuhi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wakafs');
    }
};
