<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class numberMonth extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'sl',
        'month',
        'year',

    ];
}
