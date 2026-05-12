<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'web',
        'telefono',
        'contacto',
        'youtube',
        'facebook',
        'instagram',

    ];
}
