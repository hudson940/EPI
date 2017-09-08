@extends ('master')
@section ('titulo','Preguntas')
@section('dasboard','Preguntas')
@section ('contenido')
 @include('flash::message')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Crear Pregunta</h3>
                    </div>
        <div class="card-body">
                     
                    
                      {!! Form::open(['route'=> 'preguntas.store','method'=>'POST','class'=>'form-horizontal'])!!}
                      <div class="form-group row">
                        {!! Form::label('id', 'numero', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('id', null, ['class'=>'form-control form-control-success', 'placeholder' =>'id Pregunta','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('variable', 'Variable', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('variable', null, ['class'=>'form-control form-control-success', 'placeholder' =>'# de pregunta+iniciales','required']) !!}
                        </div>
                      </div>
                      
                                           
                     <div class="form-group row">
                        {!! Form::label('pregunta', 'Pregunta Completa', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::textarea('pregunta', null, ['class'=>'form-control form-control-success', 'placeholder' =>'#+pregunta Ej. "1. codigo del predio"','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('option', 'Tipo de campo formulario', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">         
                        {!! Form::select('option',['text'=>'Texto o numero','select'=>'Lista desplegable','radio'=>'Si o No','checkbox'=>'checklist'], null, ['class'=>'form-control form-control-success','required','placeholder'=>'Seleccione...']) !!}                                          
                        </div>
                      </div>
                                           
                     <div class="form-group row">
                        {!! Form::label('defecto', 'Si eligio Lista de opciones', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                      {!! Form::textarea('defecto', '<option value="1">texto 1</option> <option value="2">texto 2</option><option value="3">texto 3</option> <option value="4">texto 4</option>', ['class'=>'form-control', 'placeholder' =>'<option value="1">texto 1</option> <option value="2">texto 2</option>
']) !!} <span class="help-block-none">Remplace el numero en el value por el numero de la opcion y el 'texto' por el nombre de la opcion</span>
                    
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('required', '¿El campo es obligatorio?', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                       {!! Form::radio('required', 'required','required') !!} Si
                       
                       {!! Form::radio('required', 'no') !!} No
                       
                      </div></div>
                       <div class="form-group row">
                        {!! Form::label('html', 'HTML', ['class'=>'sr-only col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('html', 'nada', ['class'=>'sr-only form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                       <div class="form-group row">
                        {!! Form::label('class', 'Categoria', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::select('class',['general'=>'General','agricola'=>'Inventario agricola','pecuaria'=>'Otras actividades pecuarias','forestal'=>'Inventario Forestal'], 'general',['class'=>'form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                      
                     
                      
                       <div class="form-group row">
                        {!! Form::label('placeholder', 'PlaceHolder', ['class'=>'sr-only col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('placeholder', 'nada', ['class'=>'sr-only form-control form-control-success', 'placeholder' =>'']) !!}
                        </div>
                      </div>
                     
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      {!! Form::submit('Crear Pregunta', ['class'=>'btn btn-primary']) !!}
                       </div>
                        </div>
                    </div>
                    
                    {!! Form::close() !!}
                     
                     
    </div>
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Preguntas</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Variable</th>
                            <th>Pregunta</th>
                            <th>Tipo</th>
                            <th>Opcional?</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($preguntas as $pregunta)
                          <tr>
                            <th scope="row"><a href="#">{{$pregunta->id}}</th>
                            <th>{{$pregunta->variable}}</th>
                            <td>{{$pregunta->pregunta}}</td>
                            <td>{{$pregunta->option}}</td>
                            <td>@if ($pregunta->required=='required') <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </button> @else  <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> </button> @endif
                            <td> 
	                           <a href="{{route('preguntas.edit',$pregunta->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  
													  
                            </td>
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                      {!!$preguntas->links()!!}
                    </div>
                  </div>

               
@endsection