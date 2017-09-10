<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioPecuario;
class FormularioP extends Controller
{
    public function store(Request $request)
    {
        $pecuario= new FormularioPecuario($request->all());
        $pecuario->save();
        flash("Se ha agregado la actividad correctamente, si necesita relacionar otro vuelva a diligenciar el formulario, si ya termino cierre la ventana");
        return redirect()->route('formulario.pecuario');
    }

}
