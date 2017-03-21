<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class corredorController extends Controller
{
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
