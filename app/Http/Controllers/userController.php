<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    //

    public function index(Request $request)
    {
        $users = User::all();

        return view('users.index', ['list' => $users]);
    }

    public function show(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);

            // return view('users.show')->withData($user);
            return view('users.show', ['data' => $user]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found!");

            return redirect()->back();
        }
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required | string | alpha_dash | max:66',
            'email'       => 'required | email',
            'password'    => 'required | string | min:8 | max:64',
        ]);

        $input = $request->all();

        User::create($input);

        return redirect('/carreras');
    }

    public function edit(Request $request, $id)
    {
      try
      {
        $user = User::findOrFail($id);

        return view('users.edit', ['data' => $user]);
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "The User ($id) could not be found to be edited!");

        return redirect()->back();
      }
    }

    public function update(Request $request, $id)
    {
      try
      {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name'        => 'required | string | alpha_dash | max:66',
            'email'       => 'required | email',
            'password'    => 'required | string | min:8 | max:64',
        ]);

        $input = $request->all();

        $user->fill($input)->save();

        Session::flash('flash_message', 'User successfully edited!');

        return redirect('/carreras');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "The User ($id) could not be found to be edited!");

        return redirect()->back();
      }
    }

    public function destroy(Request $request, $id)
    {
      try
      {
        $user = User::findOrFail($id);

        $user->delete();

        Session::flash('flash_message', 'User successfully deleted!');

        // return redirect()->route('users.index');
        return redirect('/carreras');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "The WiFi Network $id could not be found to be deleted!");

        return redirect()->back();
      }
    }
}
