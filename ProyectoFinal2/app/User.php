<?php

namespace App;

use Illuminate\Auth\Authenticatable;

use Sofa\Eloquence\Eloquence;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
//use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                       AuthorizableContract,
                                       CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use Eloquence;
    //

    protected $table = 'User';

    protected $fillable = [
        'id',
        'usuario',
        'nombre',
        'apPaterno',
        'apMaterno',
        'email',
        'password',
        'tipo',
        'localidad',
        'comentario',
    ];

    protected $hidden = ['password'];

    public function __tostring() {
        return $this->nombre.' '.$this->apPaterno.' '.$this->apMaterno;
    }

    public function tipo() {
        return $this->tipo;
    }
}
