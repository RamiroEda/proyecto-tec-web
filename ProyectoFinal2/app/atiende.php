<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class atiende extends Model
{
    //
    use Eloquence;

    protected $table = 'atiende';

    protected $fillable = [
        'id',
        'profesor_id',
        'grupo_id',
    ];

    public function profesor() {
        return $this->belongsTo(profesor::class, 'profesor_id');
    }

    public function grupo() {
        return $this->belongsTo(grupos::class, 'grupo_id');
    }
}
