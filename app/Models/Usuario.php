<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $fillable = [ 
        'idUsuario',
        'nombre',
        'apellido',
        'correo',
        'contrasena',
        'idMunicipio',
        'rol'
    ];
}
