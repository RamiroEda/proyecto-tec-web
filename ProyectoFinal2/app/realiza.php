<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class realiza extends Model
{
    //
    use Eloquence;

    protected $table = 'realiza';

    protected $fillable = [
        'id',
        'grupo_id',
        'unidadAprendizaje_id',
    ];

    public function grupo() {
        return $this->belongsTo(grupos::class, 'grupo_id');
    }

    public function ua() {
        return $this->belongsTo(unidadAprendizaje::class, 'unidadAprendizaje_id');
    }
}
