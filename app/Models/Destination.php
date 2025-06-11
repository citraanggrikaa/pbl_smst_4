<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';
    protected $fillable = [
        'title',
        'address',
        'desc',
        'data_detail',
        'image',
        'embedding', // <-- TAMBAHKAN INI
    ];
}
