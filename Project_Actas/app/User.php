<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apellido', 'nombre', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
