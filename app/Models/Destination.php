<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\HasNeighbors;
use Pgvector\Laravel\Vector;

class Destination extends Model
{
    use HasNeighbors;
    
    protected $table = 'destinations';

    protected $guarded = ['id'];

    protected $casts = ['embedding' => Vector::class];
}
