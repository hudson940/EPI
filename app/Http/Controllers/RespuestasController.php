<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use App\Pregunta;
use App\FormularioCultivo;
class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $respuestas=Formulario::orderBy('id','ASC')->paginate(50);
        return view('respuestas')->with('respuestas',$respuestas);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cultivos=FormularioCultivo::where('P1_cod_pred','=',$id)->get();
      //  $respuesta= Formulario::where('P1_cod_pred','=',$id);
        dd($cultivos);
       // return view('encuesta')->with('verRespuesta',$verRespuesta);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($P1_cod_pred)

    {    $preguntas=Pregunta::where('class','general')->get();
        $respuesta= Formulario::where('P1_cod_pred','=',$P1_cod_pred)->first();
        $cultivos=FormularioCultivo::where('P1_cod_pred','=',$P1_cod_pred)->get();
        return view('editar-formulario')->with('respuesta',$respuesta)
                ->with('preguntas',$preguntas)->with('cultivos',$cultivos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formulario::destroy($id);
        flash("la respuesta fue borrado");
        return redirect()->route('respuestas.index');
    }
}
