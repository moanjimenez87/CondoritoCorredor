<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carrera;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Session;



class carrerasController extends Controller
{
        public function create(Request $request)
     {
     return view('carreras.create');
      }

    public function store(Request $request)
    {

        $corredor = new carrera();
        $corredor->name= $request->name;
        $corredor -> save();

        return redirect('/home');
    }

    public function index(Request $request)
    {
        $corredor = carrera::all();

        return view('carreras.index', ['list' => $corredor]);
    }


}
