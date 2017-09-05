@extends('master')
@section('titulo','Formulario')
@section('dashboard','Formulario')
@section('contenido')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Formulario</h3>
                    </div>
        <div class="card-body">
                     
            {!! Form::open(['route'=> 'formulario.store','method'=>'POST','class'=>'form-horizontal'])!!}
                      @foreach ($preguntas as $pregunta)
                      
                     @if ($pregunta->option=="text")
                     <div class="form-group row">
                        {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                        
                        {!! Form::text($pregunta->variable, null, ['class'=>'form-control form-control-success', 
                        $pregunta->required]) !!}
                        </div>
                      </div>
                      @elseif ($pregunta->option=="select")
                    <div class="form-group row">
                        {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}
                  <div class="col-sm-9">
                  
                  <select class="{{'form-control form-control-success'}}" required="{{$pregunta->required}}"  name="{{$pregunta->variable}}">{!!html_entity_decode($pregunta->defecto, ENT_QUOTES, 'ISO-8859-1')!!}</select>
                  
                  </div>
                      </div>
                      @elseif ($pregunta->option=="radio")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!} Si
                       
                       {!! Form::radio($pregunta->variable, '0') !!} No
                       
                      </div></div>
                      @elseif ($pregunta->option=="agricola")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!} (Si, <a href="{{'formulario-cultivos'}}" target=_blank  onclick="window.open(this.href, this.target, 'width=900,height=500'); return false;">Relacione </a>
                       
                      {!! Form::radio($pregunta->variable, '0')!!}<span>(No, continue)</span>
                     </div></div>
                     @elseif ($pregunta->option=="forestal")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!}{{ '(Si,'}} <a href="{{'formulario-forestal'}}" target=_blank  onclick="window.open(this.href, this.target, 'width=900,height=500'); return false;">Relacione </a>)
                       
                       {!! Form::radio($pregunta->variable, '0') !!}<span>(No, continue)</span>

                       
                      </div></div>
                       @elseif ($pregunta->option=="otropecuario")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!} (Si <a href="{{'formulario-pecuario'}}" target=_blank  onclick="window.open(this.href, this.target, 'width=900,height=500'); return false;">Relacione Actividades</a>)
                       
                       {!! Form::radio($pregunta->variable, '0') !!} <span>(No, continue)</span> </div></div>

                       @elseif ($pregunta->option=="noagropecuario")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-3 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!} (Si <a href="{{'formulario-no-agropecuario'}}" target=_blank  onclick="window.open(this.href, this.target, 'width=900,height=500'); return false;">Relacione Actividades</a>)
                       
                       {!! Form::radio($pregunta->variable, '0') !!} <span>(No, continue)</span> </div></div>
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