<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class practica extends Model
{
    //
    use Eloquence;

    protected $table = 'practica';

    protected $fillable = [
        'id',
        'nombre',
        'fechaEntrega',
        'edc',
        'objetivo',
        'tipo',
        'descripcion',
        'unidadAprendizaje_id',
    ];

    public function __toString() {
        return $this->nombre;
    }

    public function ua() {
        return $this->belongsTo(unidadAprendizaje::class, 'unidadAprendizaje_id');
    }
}
