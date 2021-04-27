<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;
    protected $table = 'vivienda';
    protected $fillable = [ 
        'idVivienda',
        'idMunicipio',
        'precio',
        'nHabitaciones',
        'tamano',
        'nBanos',
        'tipo',
        'descripcion',
    ];
}
