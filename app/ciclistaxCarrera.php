<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciclistaxCarrera extends Model
{
     protected $fillable = [
    'nombreUsuario','NombreCarrera',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
