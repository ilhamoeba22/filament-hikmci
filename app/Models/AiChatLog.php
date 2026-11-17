<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiChatLog extends Model
{
    protected $table = 'ai_chat_logs';

    protected $fillable = [
        'user_message',
        'ai_response',
        'category',
        'user_ip',
        'user_agent',
        'model_used',
        'is_reviewed',
        'admin_evaluation',
        'admin_notes',
    ];

    protected $casts = [
        'is_reviewed' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
