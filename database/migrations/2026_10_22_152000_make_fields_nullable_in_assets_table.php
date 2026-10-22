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
        Schema::table('assets', function (Blueprint $table) {
            $table->string('pemilik')->nullable()->change();
            $table->string('lokasi')->nullable()->change();
            $table->decimal('harga', 15, 2)->nullable()->change();
            $table->string('pdf')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->string('pemilik')->nullable(false)->change();
            $table->string('lokasi')->nullable(false)->change();
            $table->decimal('harga', 15, 2)->nullable(false)->change();
            $table->string('pdf')->nullable(false)->change();
        });
    }
};
