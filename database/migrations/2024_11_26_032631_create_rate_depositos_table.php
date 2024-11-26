<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateDepositosTable extends Migration
{
    public function up()
    {
        Schema::create('rate_depositos', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->decimal('rate_1_bulan', 5, 2)->nullable();
            $table->decimal('rate_3_bulan', 5, 2)->nullable();
            $table->decimal('rate_6_bulan', 5, 2)->nullable();
            $table->decimal('rate_12_bulan', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rate_depositos');
    }
}
