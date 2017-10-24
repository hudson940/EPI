<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioCultivo;
use App\Pregunta;
use App\Cultivo;
class FormularioC extends Controller
{
    public function store(Request $request)
    {
        $cultivo= new FormularioCultivo($request->all());
        $cultivo->save();
        flash("Se ha agregado el cultivo correctamente, si necesita relacionar otro vuelva a diligenciar el formulario, si ya termino cierre la ventana");
        return redirect()->route('formulario.cultivos');
    }
    public function edit($P1_cod_pred)
    
        {   $preguntas=Pregunta::where('class','agricola')->get();
            $cultivos=FormularioCultivo::where('P1_cod_pred','=',$P1_cod_pred)->get();
            $listaCultivos=Cultivo::orderBy('Cultivo_plantacion','ASC')->get();
            return view('editar-cultivo')
                    ->with('preguntas',$preguntas)->with('cultivos',$cultivos)->with('listaCultivos',$listaCultivos);;
    
        }

    public function update(Request $request,  $id)
    {
        $formulario= FormularioCultivo::find($id);
        $preguntas=Pregunta::where('class','agricola')->get();
        foreach ($preguntas as $pregunta)
        {
            $variable=$pregunta->variable;
            $formulario->$variable=$request->$variable;
        }
        $formulario->save();
        flash("Se ha Editado el cultivo correctamente");
        return redirect()->route('formularioc.edit',$formulario->P1_cod_pred);
    }

}
