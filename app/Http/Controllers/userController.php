<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(Request $request)
 {
 return view('corredores.create');
 }
}
