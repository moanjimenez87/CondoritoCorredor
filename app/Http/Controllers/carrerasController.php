<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carrera;


class carrerasController extends Controller
{
        public function create(Request $request)
     {
     return view('carreras.create');
     }

        public function store(Request $request)
     {
     $input = $request->all();
     User::create($input);
     return redirect('/home');
     }


}
