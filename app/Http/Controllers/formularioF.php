<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioForestal;
use App\Pregunta;
use App\Cultivo;
class formularioF extends Controller
{
    public function edit($P1_cod_pred)
    
        {   $preguntas=Pregunta::where('class','forestal')->get();
            $cultivos=FormularioForestal::where('P1_cod_pred','=',$P1_cod_pred)->get();
            $listaCultivos=Cultivo::orderBy('Cultivo_plantacion','ASC')->get();
            return view('editar-forestal')
                    ->with('preguntas',$preguntas)->with('forestales',$cultivos)->with('listaCultivos',$listaCultivos);;
    
        }

    public function update(Request $request,  $id)
    {
        $formulario= FormularioForestal::find($id);
        $preguntas=Pregunta::where('class','forestal')->get();
        foreach ($preguntas as $pregunta)
        {
            $variable=$pregunta->variable;
            $formulario->$variable=$request->$variable;
        }
        $formulario->save();
        flash("Se ha Editado el cultivo correctamente");
        return redirect()->route('formulariof.edit',$formulario->P1_cod_pred);
    }

}
