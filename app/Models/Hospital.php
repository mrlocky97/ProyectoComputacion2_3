<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $table = 'hospitales';

    protected $fillable = [
        'CCN',
        'CODCNH',
        'Nombre_Centro',
        'Tipo_Vía',
        'Nombre_Vía',
        'Número_Vía',
        'Teléfono_Principal',
        'Cód_Municipio',
        'Municipio',
        'Cód_Provincia',
        'Provincia',
        'Cód_CCAA',
        'CCAA',
        'Código_Postal',
        'CAMAS',
        'Cód_Clase_de_Centro',
        'Clase_de_Centro',
        'Cód_Dep_Funcional',
        'Dependencia_Funcional',
        'Forma_parte_Complejo',
        'CODIDCOM',
        'Nombre_del_Complejo',
        'ALTA',
        'Email'
    ];
}
