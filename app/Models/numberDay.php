<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class numberDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'sl',
        'day',
        'month',
        'dangcho', 
        'dasudung',
        'boqua',
        'tong'

    ];
}
