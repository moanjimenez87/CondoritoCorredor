<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ruta;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Session;
use Billing;


class rutaController extends Controller
{
     public function create(Request $request)
     {
     return view('rutas.create');
      }

    public function store(Request $request)
    {

        $cxr = new ruta();
        $cxr->nombreUsuario= $request->nombreUsuario;
         $cxr->NombreCarrera= $request->NombreCarrera;
        $cxr -> save();

        return redirect('/home');
    }

    public function index(Request $request)
    {
        $cxr = ruta::all();

        return view('rutas.index', ['list' => $cxr]);
    }

    public function consulta(Request $request, $id)
    {
       $cxr = DB::table('rutas')
                    ->whereBetween('created_at', array(1, 100))->get();
    }

    $date->toDateString();


     public function destroy(Request $request, $id)
    {
      try
      {
       $cxr = carrera::findOrFail($id);

        $cxr->delete();

        Session::flash('flash_message', 'User successfully deleted!');

        // return redirect()->route('users.index');
        return redirect('/home');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "The WiFi Network $id could not be found to be deleted!");

        return redirect()->back();
      }
    }
}
