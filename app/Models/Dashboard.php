<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_on','device_off','service_on',
        'service_off','number_used','number_pass',
        'number_wait','number','time'
    ];
}
