<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    protected $fillable = [
        'id','Nombre','Numero_docentes'
    ];
}
