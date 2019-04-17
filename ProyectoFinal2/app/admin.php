<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class admin extends Model
{
    //
    use Eloquence;

    protected $table = 'admin';

    protected $fillable = [
        'id',
        'usuario_id',
    ];

    public function usuario() {
        return $this->belongsTo(usaurio::class, 'usuario_id');
    }
}
