<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class asiste extends Model
{
    //
    use Eloquence;

    protected $table = 'asiste';

    protected $fillable = [
        'id',
        'alumno_id',
        'asiste',
        'practica_id',
    ];

    public function alumno() {
        return $this->belongsTo(alumno::class, 'alumno_id');
    }

    public function practica() {
        return $this->belongsTo(practica::class, 'practica_id');
    }
}
