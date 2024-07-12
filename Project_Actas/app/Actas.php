<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actas extends Model
{
    //
    protected $fillable = [
        'fecha','nombre','firma','asunto','usuario_id'
    ];
}
