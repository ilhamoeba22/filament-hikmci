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
        Schema::create('ai_chat_logs', function (Blueprint $table) {
            $table->id();
            $table->text('user_message');
            $table->mediumText('ai_response');
            $table->string('category', 100)->default('Pertanyaan Umum');
            $table->string('user_ip', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('model_used', 100)->nullable();
            $table->boolean('is_reviewed')->default(false);
            $table->string('admin_evaluation', 100)->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamps();

            $table->index('category');
            $table->index('is_reviewed');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_chat_logs');
    }
};
