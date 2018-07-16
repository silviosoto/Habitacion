<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario extends Authenticatable
{
   
    protected $table = 'usuario';

    protected $fillable = [
        'Nombres', 'email','foto_perfil', 'password','Estado',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
