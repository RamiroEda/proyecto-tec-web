<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class nivel extends Model
{
    //
    use Eloquence;

    protected $table = 'nivel';

    protected $fillable = [
        'id',
        'nivel',
    ];

    public function __toString() {
        return $this->nivel;
    }

    public function grupos() {
        return $this->hasMany(grupos::class, 'nivel_id');
    }
}
