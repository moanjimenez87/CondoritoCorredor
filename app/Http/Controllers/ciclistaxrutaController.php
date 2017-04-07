<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ciclistaxruta;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Session;

class ciclistaxrutaController extends Controller
{
     public function create(Request $request)
     {
     return view('ciclistasxrutas.create');
      }

    public function store(Request $request)
    {

        $cxr = new ciclistaxCarrera();
        $cxr->nombreUsuario= $request->nombreUsuario;
         $cxr->NombreCarrera= $request->NombreCarrera;
        $cxr -> save();

        return redirect('/home');
    }

    public function index(Request $request)
    {
        $cxr = ciclistaxCarrera::all();

        return view('ciclistasxrutas.index', ['list' => $cxr]);
    }


}
