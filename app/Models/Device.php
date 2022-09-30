<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'mathietbi', 'tenthietbi', 'diachiIP',
        'trangthaihoatdong', 'trangthaiketnoi','dichvusudung',
        'loaithietbi','tendn','matkhau'
    ];
}
