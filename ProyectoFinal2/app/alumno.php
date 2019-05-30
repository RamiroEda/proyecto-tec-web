<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class alumno extends Model
{
    //
    use Eloquence;

    protected $table = 'alumno';

    protected $fillable =[
        'id',
        'usuario_id',
        'grupo_id',
    ];

    public function usuario() {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function grupo() {
        return $this->belongsTo(grupos::class, 'grupo_id');
    }
}
