<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvsd extends Model
{
    use HasFactory;

    protected $fillable = [
        'mathietbi', 'tendichvu','madichvu'
    ];
}
