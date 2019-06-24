<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Junta extends Model
{
    protected $fillable = [
        'id','Nivel_de_Importancia','Motivos','Lugar','Fecha','Hora','academia'
    ];
}
