<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dairy extends Model
{
    use HasFactory;
    protected $filltable = [
        'tendn',
        'thoigianhoatdong',
        'IPthuchien',
        'thaotacTH'

    ];
}
