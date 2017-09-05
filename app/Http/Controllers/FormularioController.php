<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Pregunta;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $preguntas=Pregunta::where('class','general')->paginate(150);
        
        return view('formulario')->with('preguntas',$preguntas);
    }
    public function cultivos()
    {
        $preguntasE=Pregunta::where('class','agricola')->paginate(50);
        return view('formulario-cultivos')->with('preguntasE',$preguntasE);
    }
    public function pecuario()
    {
        $preguntasE=Pregunta::where('class','pecuaria')->paginate(50);
        return view('formulario-pecuario')->with('preguntasE',$preguntasE);
    }

    public function noAgropecuario()
    {
        $preguntasE=Pregunta::where('class','agricola')->paginate(50);
        return view('formulario-no-agropecuario')->with('preguntasE',$preguntasE);
    }
    public function forestal()
    {
        $preguntasE=Pregunta::where('class','agricola')->paginate(50);
        return view('formulario-forestal')->with('preguntasE',$preguntasE);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
