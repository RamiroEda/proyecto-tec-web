<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class directivos extends Model
{
    //
    use Eloquence;

    protected $table = 'directivos';

    protected $fillable = [
        'id',
        'nombre',
        'sexo'
    ];
}
