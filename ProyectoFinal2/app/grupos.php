<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class grupos extends Model
{
    //
    use Eloquence;

    protected $table = 'grupos';

    protected $fillable = [
        'id',
        'grupo',
        'comentario',
        'semestre_id',
        'nivel_id',
    ];

    public function __toString() {
        return $this->grupo;
    }

    public function ua() {
        return $this->hasMany(realiza::class, 'grupo_id');
    }
}
