<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idMunicipio',
        'organizador',
        'descripcion',
        'fecha',
        'precio',
        'lat',
        'lon',
    ];


}
