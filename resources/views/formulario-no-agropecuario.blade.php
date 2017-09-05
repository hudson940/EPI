@extends('master')
@section('titulo','Formulario no Agropecuario')
@section('dashboard','Formulario/No Agropecuario')
@section('contenido')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Peguntas Actividades no Agropecuarias</h3>
                    </div>
        <div class="card-body">
                     
            {!! Form::open(['route'=> 'formularios.store','method'=>'POST','class'=>'form-horizontal'])!!}
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
                      {!! Form::radio($preguntaE->variable, '1','1') !!} Si
                       
                       {!! Form::radio($preguntaE->variable, '0') !!} No
                       
                      </div></div>
            
                      @endif
               
                      

            
                        
                        
                      @endforeach
                      
                      
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      <input class="btn btn-primary" value="Registrar Formulario" type="submit">
                       </div>
                        </div>
                                                  
                    {!! Form::close() !!}
                     @include('flash::message')     
                     </div>
</div>
@endsection