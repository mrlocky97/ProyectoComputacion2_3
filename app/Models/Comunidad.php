<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comunidad extends Model
{
    protected $table = 'comunidades';
    use HasFactory;
    protected $fillable = [
        'CODAUTO',
        'AUTONOMIA',
        'TEXTO_AUTONOMIA'
    ];
}
