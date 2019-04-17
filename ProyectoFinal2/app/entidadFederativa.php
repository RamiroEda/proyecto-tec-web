<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class entidadFederativa extends Model
{
    //
    use Eloquence;

    protected $table = 'entidadFederativa';

    protected $fillable = [
        'id',
        'entidad',
    ];

    public function __toString() {
        return $this->entidad;
    }
}
