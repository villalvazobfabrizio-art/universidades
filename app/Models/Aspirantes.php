<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirantes extends Model
{
     protected $fillable = [
        'nombre_completo',
        'correo',
        'pregunta',
        'respuesta',
        'telefono',
     

    ];
}
