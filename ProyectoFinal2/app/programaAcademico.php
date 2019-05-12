<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Sofa\Eloquence\Eloquence;

class programaAcademico extends Model
{
    //
    use Eloquence;

    protected $table = "programaAcademico";

    protected $fillable = [
        'id',
        'programa',
        'clave',
        'comentario',
    ];
}
