<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'idMunicipio',
        'nombre',
        'localidad',
        'denominacionGenerica',
        'denominacionEspecifica',
        'domicilio',
        'codigoPostal',
        'lat',
        'lon',
    ];


}
