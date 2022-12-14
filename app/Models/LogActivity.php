<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class LogActivity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'time', 'ip', 'username'
    ];
}