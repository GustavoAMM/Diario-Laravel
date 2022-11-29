<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class ControladorVista extends Controller
{

    public function procesarRecuerdo(validadorDiario $req)
    {
        // return redirect('ingresar')->with('confirmacion','Tu recuerdo llego al controlador');
        return redirect()->route('in')->with('confirmacion','Tu recuerdo llego al controlador');

        // return $req->all();
        // return $req->path();
        // return $req->url()
        // return $req->ip();
    }
    public function showHome()
    {
        return view("home");
    }

    public function showIngresar()
    {
        
    }

    public function showRecuerdos()
    {
        //return view('recuerdos');
    }
}
