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

     public function update(Request $request, $id)
    {
      try
      {
        $corredor = carrera::findOrFail($id);

        $this->validate($request, [
            'name'        => 'required | string | alpha_dash | max:66',
        ]);

        $input = $request->all();

        $corredor->fill($input)->save();

        Session::flash('flash_message', 'User successfully edited!');

        return redirect('/home');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "The User ($id) could not be found to be edited!");

        return redirect()->back();
      }
    }

     public function show(Request $request, $id)
    {
        try
        {
            $corredor = carrera::findOrFail($id);

            // return view('users.show')->withData($user);
            return view('carreras.show', ['data' => $corredor]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found!");

            return redirect()->back();
        }
    }

     public function destroy(Request $request, $id)
    {
      try
      {
        $corredor = carrera::findOrFail($id);

        $corredor->delete();

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
