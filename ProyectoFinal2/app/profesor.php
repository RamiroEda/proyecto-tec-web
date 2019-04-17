<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Sofa\Eloquence\Eloquence;

class profesor extends Model
{
    //
    use Eloquence;

    protected $table = 'profesor';

    protected $fillable = [
        'id',
        'usuario_id',
    ];

    public function usuario() {
        return $this->belongsTo(usuario::class, 'usuario_id');
    }

    public function grupos() {
        return $this->hasMany(atiende::class, 'profesor_id');
    }

    public function ua() {
        return $this->hasMany(imparte::class, 'profesor_id');
    }
}
