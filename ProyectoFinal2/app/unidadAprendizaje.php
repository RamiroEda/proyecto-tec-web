<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class unidadAprendizaje extends Model
{
    //
    use Eloquence;

    protected $table = 'unidadAprendizaje';

    protected $fillable = [
        'id',
        'nombre',
    ];

    public function __toString() {
        return $this->nombre;
    }

    public function profesor() {
        return $this->hasOne(imparte::class, 'unidadAprendizaje_id');
    }
}
