<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $preguntas=Pregunta::orderBy('id','ASC')->paginate(50);
        return view('preguntas')->with('preguntas',$preguntas);
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
        $pregunta= new Pregunta($request->all());
        $pregunta->save();
        flash("La pregunta numero ".$pregunta->id." ha sido creada");
        return redirect()->route('preguntas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta= Pregunta::find($id);
        return view('editar-pregunta')->with('pregunta',$pregunta);

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
        $pregunta = Pregunta::find($id);
        $pregunta->id= $request->id;
        $pregunta->variable=$request->variable;
        $pregunta->pregunta=$request->pregunta;
        $pregunta->option=$request->option;
        $pregunta->html=$request->html;
        $pregunta->defecto=$request->defecto;
        $pregunta->class=$request->class;
        $pregunta->required=$request->required;
        $pregunta->placeholder=$request->placeholder;
        $pregunta->save();
        flash("La pregunta numero ".$pregunta->id." ha sido editada");
        return redirect()->route('preguntas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
