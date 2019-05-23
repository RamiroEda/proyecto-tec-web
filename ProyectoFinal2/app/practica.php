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
        'noPractica',
        'nombre',
        'tipo',
        'objetivo',
        'descripcion',
        'competencias',
        'edc',
        'fechaEntrega',
        'presupuesto',
        'institucion',
        'programaAcademico_id',
        'unidadAprendizaje_id',
        'profesor_id',
        'semestre_id',
        'noAlumnos',
        'entidadFederativa_id',
    ];

    public function __toString() {
        return $this->nombre;
    }

    public function profesor() {
        return $this->belongsTo(profesor::class, 'profesor_id');
    }

    public function programaAcademico() {
        return $this->belongsTo(programaAcademico::class, 'programaAcademico_id');
    }

    public function ua() {
        return $this->belongsTo(unidadAprendizaje::class, 'unidadAprendizaje_id');
    }
}
