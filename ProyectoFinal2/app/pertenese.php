<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class pertenese extends Model
{
    //
    use Eloquence;

    protected $table = 'pertenece';

    protected $fillable = [
        'id',
        'alumno_id',
        'usuario_id'
    ];
}
