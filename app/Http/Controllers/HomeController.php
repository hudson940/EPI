<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\User;
use App\Formulario;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas=Pregunta::all();
        $usuarios=User::all();
        $respuestas=Formulario::all();
        return view('index')->with('preguntas',$preguntas)->with('usuarios',$usuarios)->with('respuestas',$respuestas);
       
    }
}
