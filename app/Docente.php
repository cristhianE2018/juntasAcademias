<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'id','Nombre','Apellidos','Puesto','Contraseña','academia'
    ];
}
