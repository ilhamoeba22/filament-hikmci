<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominalsTable extends Migration
{
    public function up()
    {
        Schema::create('nominals', function (Blueprint $table) {
            $table->id();
            $table->decimal('nominal', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nominals');
    }
}
