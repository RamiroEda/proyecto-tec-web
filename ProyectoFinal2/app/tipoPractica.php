<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class tipoPractica extends Model
{
    //
    use Eloquence;

    protected $table = 'tipoPractica';

    protected $fillable = [
        'id',
        'tipo',
    ];
}
