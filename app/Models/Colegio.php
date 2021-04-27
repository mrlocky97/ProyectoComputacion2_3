<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;


    protected $fillable = [
        'idColegio',
        'idMunicipio',
        'localidad',
        'idProvincia',
        'provincia',
        'denomGenerica',
        'denomEspesifica',
        'naturaleza',
        'domicilio',
        'cPostal',
        'telefono',
    ];


}
