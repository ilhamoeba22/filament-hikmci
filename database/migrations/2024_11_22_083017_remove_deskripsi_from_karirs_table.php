<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDeskripsiFromKarirsTable extends Migration
{
    public function up()
    {
        Schema::table('karirs', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }

    public function down()
    {
        Schema::table('karirs', function (Blueprint $table) {
            $table->text('deskripsi')->nullable();
        });
    }
}
