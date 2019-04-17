<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class imparte extends Model
{
    //
    use Eloquence;

    protected $table = 'imparte';

    protected $fillable = [
        'id',
        'profesor_id',
        'unidadAprendizaje_id',
    ];

    public function profesor() {
        return $this->belongsTo(profesor::class, 'profesor_id');
    }

    public function ua() {
        return $this->belongsTo(unidadAprendizaje::class, 'unidadAprendizaje_id');
    }
}
