<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\carrera as Authenticatable;

use Illuminate\Support\Facades\Hash;

class carrera extends Model
{

    protected $fillable = [
    'name',
    ];


}
