<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('piagam_audit_internals', function (Blueprint $table) {
            $table->dropColumn('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('piagam_audit_internals', function (Blueprint $table) {
            $table->string('tahun')->after('file')->nullable();
        });
    }
};
