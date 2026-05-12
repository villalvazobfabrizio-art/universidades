<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'perfil_ingreso',
        'perfil_egreso',
        'contacto',
     

    ];
}
