<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioCultivo;

class FormularioC extends Controller
{
    public function store(Request $request)
    {
        $cultivo= new FormularioCultivo($request->all());
        $cultivo->save();
        flash("Se ha agregado el cultivo correctamente, si necesita relacionar otro vuelva a diligenciar el formulario, si ya termino cierre la ventana");
        return redirect()->route('formulario.cultivos');
    }
}
