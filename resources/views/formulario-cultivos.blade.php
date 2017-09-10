@extends('master')
@section('titulo','Formulario Cultivos')
@section('dashboard','Formulario/Cultivos')
@section('contenido')
 @include('flash::message')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Relacion de Cultivos</h3>
                    </div>
        <div class="card-body">
                     
            {!! Form::open(['route'=> 'formulario.storec','method'=>'POST','class'=>'form-horizontal'])!!}
                     <div class="form-group row">
                        {!!Form::label('cod_predio','Codigo Predio', ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                        
                        {!! Form::text('cod_predio', null, ['class'=>'form-control form-control-success', 
                        'required']) !!}
                        </div>
                      </div>
                        <div class="form-group row">
                        {!!Form::label('27-cultivo','27. Nombre del cultivo ', ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                   <select name="27-cultivo" class="form-control form-control-success" >
                          <option value="0">Seleccione...</option>
                        @foreach ($cultivos as $cultivo) 
                          <option value={!!$cultivo->Cultivo_plantacion!!}>{!!$cultivo->Cultivo_plantacion!!}</option>
                         @endforeach </select>
                       
                     
                        
                  </div>
                      </div> 
                      @foreach ($preguntasE as $preguntaE)
                     @if ($preguntaE->option=="text")
                     <div class="form-group row">
                        {!!Form::label($preguntaE->variable,$preguntaE->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                        
                        {!! Form::text($preguntaE->variable, null, ['class'=>'form-control form-control-success', 
                        $preguntaE->required]) !!}
                        </div>
                      </div>
                      @elseif ($preguntaE->option=="select")
                    <div class="form-group row">
                        {!!Form::label($preguntaE->variable,$preguntaE->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                  
                  <select class="{{'form-control form-control-success'}}" required="{{$preguntaE->required}}"  name="{{$preguntaE->variable}}">{!!html_entity_decode($preguntaE->defecto, ENT_QUOTES, 'ISO-8859-1')!!}</select>
                  
                  </div>
                      </div>
                      @elseif ($preguntaE->option=="radio")
                      <div class="form-group row">
                       {!!Form::label($preguntaE->variable,$preguntaE->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                              @php $array = explode(',', $preguntaE->html); $n=count($array) @endphp
                  @for ($i=0;$i<$n;$i++)
                   {!! Form::radio($preguntaE->variable, $i+1) !!} {{$array[$i]}}
                  @endfor
                       
                      </div></div>
                              @elseif ($preguntaE->option=="checkbox")
              <div class="form-group row">
                       {!!Form::label($preguntaE->variable,$preguntaE->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                  @php $array = explode(',', $preguntaE->html); $n=count($array) @endphp
                  @for ($i=0;$i<$n;$i++)
                   {!! Form::checkbox($preguntaE->variable, $i+1) !!} {{$array[$i]}}
                  @endfor 
                   {!!Form::label($preguntaE->variable,'Si en la pregunta '.$preguntaE->id.' la respuesta es mas de una opcion, escriba los numeros de la opcion separados por comas', ['class'=>'col-sm-3 from-control-label']) !!}  
                  {!! Form::text($preguntaE->variable, null, ['class'=>'form-control form-control-success','placeholder'=>'Ej. 1,2,3']) !!}
                     </div></div>
                      @endif
               
                      

            
                        
                        
                      @endforeach
                      
                      
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      <input class="btn btn-primary" value="Registrar Cultivo" type="submit">
                       </div>
                        </div>
                                                  
                    {!! Form::close() !!}
                     
                     </div>
</div>
@endsection