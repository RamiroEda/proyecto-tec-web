<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class semestre extends Model
{
    //
    use Eloquence;

    protected $table = 'semestre';

    protected $fillable = [
        'id',
        'semestre',
        'comentario',
    ];
}
