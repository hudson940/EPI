<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Pregunta;
use Illuminate\Http\Request;

use App\Cultivo;


use App\FormularioGeneral;

use Illuminate\Support\Facades\DB;
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
    {   $cultivos=Cultivo::all();
        $preguntasE=Pregunta::where('class','agricola')->paginate(50);
        return view('formulario-cultivos')->with('cultivos',$cultivos)->with('preguntasE',$preguntasE);
    }
    public function pecuario()
    {
        $preguntasE=Pregunta::where('class','pecuaria')->paginate(50);
        return view('formulario-pecuario')->with('preguntasE',$preguntasE);
    }

    public function noAgropecuario()
    {
        $preguntasE=Pregunta::where('class','noagropecuaria')->paginate(50);
        return view('anexos')->with('preguntasE',$preguntasE);
    }
    public function forestal()
    {  $cultivos=Cultivo::all();
       // $cultivos=DB::table('cultivos')->select('Cultivo_plantacion');
        $preguntasE=Pregunta::where('class','forestal')->paginate(50);
        return view('formulario-forestal')->with('preguntasE',$preguntasE)->with('cultivos',$cultivos);
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
        $general= new Formulario($request->all());
        $general->save();
        flash("Se ha agregado el formulario correctamente, si necesita relacionar otro predio vuelva a diligenciar el formulario, si ya termino cierre la ventana");
        return redirect()->route('formulario.index');
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
