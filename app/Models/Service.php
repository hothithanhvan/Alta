<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'madichvu',
        'tendichvu',
        'mota',
        'trangthaihoatdong',
        'batdau',
        'ketthuc',
        'prefix',
        'surfix',
        'reset',

    ];
}
