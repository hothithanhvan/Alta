<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;
    protected $filltable = [
        'stt',
        'tenkh',
        'tendichvu',
        'thoigiancap',
        'hansd',
        'trangthai',
        'nguoncap',
        'sdt',
        'email',

    ];
}
