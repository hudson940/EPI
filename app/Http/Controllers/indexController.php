<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pregunta;
use App\User;
class indexController extends Controller {

    public function index()
    {   $preguntas=Pregunta::all();
        $usuarios=User::all();
        return view('index')->with('preguntas',$preguntas)->with('usuarios',$usuarios);
    }

}