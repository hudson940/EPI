@extends('master')
@section('titulo','Formulario Pecuario')
@section('dashboard','Formulario/Pecuario')
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
                      <h3 class="h4">Peguntas otras Actividades Pecuarias</h3>
                    </div>
        <div class="card-body">
                     
            {!! Form::open(['route'=> 'formularios.storep','method'=>'POST','class'=>'form-horizontal'])!!}
                       <div class="form-group row">
                        {!!Form::label('P1_cod_predio','Codigo Predio', ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                        
                        {!! Form::text('P1_cod_predio', null, ['class'=>'form-control form-control-success', 
                        'required']) !!}
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
                  @endfor</div></div>
                      @endif
               
                      

            
                        
                        
                      @endforeach
                      
                      
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      <input class="btn btn-primary" value="Registrar Actividad" type="submit">
                       </div>
                        </div>
                                                  
                    {!! Form::close() !!}
                      
                     </div>
</div>
@endsection