<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class elControlador extends Controller
{
    public function index()
    {
     return view('archivos/index');
    }

}
