<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\User;
use App\Formulario;
class indexController extends Controller {

    public function index()
    {   $preguntas=Pregunta::all();
        $usuarios=User::all();
        $respuestas=Formulario::all();
        return view('index')->with('preguntas',$preguntas)->with('usuarios',$usuarios)->with('respuestas',$respuestas);
    }

}