<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($plainPassword){
		$this->attributes['password']=
	Hash::make($plainPassword);
	}

     public function create(Request $request)
 {
 return view('corredores.create');
 }

    public function store(Request $request)
 {
 $input = $request->all();
 User::create($input);
 return redirect('/home');
 }
}
