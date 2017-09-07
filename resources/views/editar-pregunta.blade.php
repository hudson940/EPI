@extends ('master')
@section ('titulo','Editar Usuario')
@section('dasboard','Formulario de Edicion')
@section ('contenido')
  @include('flash::message')
  @if ( Auth::user()->rol=='estudiante')
        <div class="card"> <h3>  No esta autorizado para editar preguntas </h3></div>
         @else 
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Editar Pregunta {{$pregunta->id}}</h3>
                    </div>
        <div class="card-body"> 
                     
                    
                      {!! Form::open(['route'=> ['preguntas.update',$pregunta],'method'=>'PUT','class'=>'form-horizontal'])!!}
                      <div class="form-group row">
                        {!! Form::label('id', 'numero', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('id', $pregunta->id, ['class'=>'form-control form-control-success', 'placeholder' =>'id Pregunta','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('variable', 'Variable', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('variable', $pregunta->variable, ['class'=>'form-control form-control-success', 'placeholder' =>'# de pregunta+iniciales','required']) !!}
                        </div>
                      </div>
                      
                                           
                     <div class="form-group row">
                        {!! Form::label('pregunta', 'Pregunta Completa', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::textarea('pregunta', $pregunta->pregunta ,['class'=>'form-control form-control-success', 'placeholder' =>'#+pregunta Ej. "1. codigo del predio"','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('option', 'Tipo de campo formulario', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">         
                        {!! Form::select('option',['text'=>'Texto o numero','select'=>'Lista desplegable','radio'=>'Si o No','checkbox'=>'checklist'],$pregunta->option, ['class'=>'form-control form-control-success','required','placeholder'=>'Seleccione...']) !!}                                          
                        </div>
                      </div>
                                           
                     <div class="form-group row">
                        {!! Form::label('defecto', 'Lista de opciones', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                      {!! Form::textarea('defecto', $pregunta->defecto, ['class'=>'form-control', 'placeholder' =>'<option value="1">texto 1</option> <option value="2">texto 2</option>']) !!} <span class="help-block-none">Remplace el numero en el value por el numero de la opcion y el 'texto' por el nombre de la opcion</span>
                    
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('required', '¿El campo es obligatorio?', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                       {!! Form::radio('required', 'required',$pregunta->required) !!} Si
                       
                       {!! Form::radio('required', 'no') !!} No
                       
                      </div></div>
                       <div class="form-group row">
                        {!! Form::label('html', 'HTML', ['class'=>' col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('html', $pregunta->html, ['class'=>' form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                       <div class="form-group row">
                        {!! Form::label('class', 'Categoria', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::select('class',['general'=>'General','agricola'=>'Inventario agricola','pecuaria'=>'Otras actividades pecuarias','noagropecuario'=>'Actividades no agropecuarias'], $pregunta->class,['class'=>'form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                      
                     
                      
                       <div class="form-group row">
                        {!! Form::label('placeholder', 'PlaceHolder', ['class'=>' col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('placeholder', $pregunta->placeholder, ['class'=>' form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                     
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      {!! Form::submit('Editar Usuario', ['class'=>'btn btn-primary']) !!}
                       </div>
                        </div>
                    </div>
                    
                    {!! Form::close() !!}
  @endif                  
                     
    </div>

@endsection
