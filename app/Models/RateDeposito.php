<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateDeposito extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan',
        'rate_1_bulan',
        'rate_3_bulan',
        'rate_6_bulan',
        'rate_12_bulan',
    ];
}
