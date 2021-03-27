<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'id',
        'comunidad_id',
        'provincia',
        'slug',
        'capital_id',
        '',
    ];


}
