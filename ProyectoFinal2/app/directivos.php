<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class directivos extends Model
{
    //
    use Eloquent;

    protected $table = 'directivos';

    protected $fillable = [
        'id',
        'nombre',
        'sexo'
    ];
}
