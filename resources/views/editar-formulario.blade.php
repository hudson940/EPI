@extends('master')
@section('titulo','Formulario')
@section('dashboard','Formulario')
@section('contenido')
@if ( Auth::User()->rol=='investigador')
<div class="card">
        @include('flash::message') 
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
                     
            {!! Form::open(['route'=> ['formulario.update',$respuesta->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
            
            {!! Form::hidden('usuario', Auth::user()->email,  ['class'=>'col-sm-9 from-control-label']) !!}
            {!! Form::hidden('id', $respuesta->id,  ['class'=>'col-sm-9 from-control-label']) !!}
          
            
                      @foreach ($preguntas as $pregunta)
                        
                     @if ($pregunta->option=="text")
                     <div class="form-group row">
                        {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}
                  <div class="col-sm-9">
                        @php $variable=$pregunta->variable @endphp
                        {!! Form::text($pregunta->variable, $respuesta->$variable, ['class'=>'form-control form-control-success', 
                        $pregunta->required]) !!}
                      
                        </div>
                      </div>
                      @elseif ($pregunta->option=="select")
                    <div class="form-group row">

                        {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}
                  <div class="col-sm-9">
                   @php $variable=$pregunta->variable @endphp
                  <select class="{{'form-control form-control-success'}}"  required="{{$pregunta->required}}"  name="{{$pregunta->variable}}"><option>{{$respuesta->$variable}}</option> {!!html_entity_decode($pregunta->defecto, ENT_QUOTES, 'ISO-8859-1')!!}</select>
                  
                  </div>
                      </div>
                      @elseif ($pregunta->option=="radio")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                        @php $variable=$pregunta->variable @endphp
                 
                   {!! Form::text($pregunta->variable, $respuesta->$variable) !!}
               
                
                      </div></div>

                        @elseif ($pregunta->option=="checkbox")
              <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                  @php $array = explode(',', $pregunta->html); $n=count($array) @endphp @php $variable=$pregunta->variable @endphp
                  @for ($i=0;$i<$n;$i++)
                  <i class="fa fa-circle-o-notch" aria-hidden="true">{{ $array[$i]}}</i>
                  @endfor    {!!Form::label($pregunta->variable,'Responda la pregunta '.$pregunta->id.' en el siguiente recuadro escribiendo solo el numero de la opcion, si la respuesta es mas de una opcion, escriba los numeros de la opcion separados por comas', ['class'=>'col-sm-8 from-control-label']) !!}  
                  {!! Form::text($pregunta->variable, $respuesta->$variable, ['class'=>'form-control form-control-success','placeholder'=>'Ej. 1,2,3']) !!}
                  
                   </div></div>
                  
                   
              
                      @elseif ($pregunta->option=="agricola")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                     {!! Form::text($pregunta->variable, $respuesta->$variable, ['class'=>'form-control form-control-success']) !!}
                     </div>
                     </div>
                    <div class="form-group row"> 
                    <a href="{{route('formularioc.edit',$respuesta->P1_cod_pred)}}" class="btn btn-sm btn-warning">Editar<i class="fa fa-pencil"></i> </a>
									
                    
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cultivo</th>
                            <th>Area</th>
                            
                            <th>Tipo</th>
                          <th>Cant Cosechada</th>
                          <th>Duracion</th>
                          <th>Finalidad</th>
                          <th>Cant AutoC</th>
                          <th>Area AutoC</th>
                          <th>Productividad</th>
                          <th>Tipo Semilla</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach ($cultivos as $cultivo) 
                          <tr>
                            <th> {{$cultivo->P27_cultivo}}</th>
                            <th>{{$cultivo->P28_area_sembrada}}</th>
                            <th> {{$cultivo->P29_tipo}}</th>
                            <th>{{$cultivo->P30_cant_cosech}}</th>
                            <th> {{$cultivo->P31_duracion}}</th>
                            <th>{{$cultivo->P32_finalidad}}</th>
                            <th> {{$cultivo->P33_cant_autoC}}</th>
                            <th>{{$cultivo->P34_area_autoC}}</th>
                            <th> {{$cultivo->P35_productividad}}</th>
                            <th>{{$cultivo->P36_tipo_semilla}}</th>
               
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    
                     

                     </div>
                     @elseif ($pregunta->option=="forestal")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                     
                     {!! Form::text($pregunta->variable, $respuesta->$variable, ['class'=>'form-control form-control-success']) !!}
                     

                       
                      </div></div>
                         <div class="form-group row"> 
                    <a href="{{route('formulariof.edit',$respuesta->P1_cod_pred)}}" class="btn btn-sm btn-warning">Editar<i class="fa fa-pencil"></i> </a>
									
                    
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Plantacion</th>
                            <th>Area</th>
                            
                            <th>N plantas</th>
                            <th>Finalidad</th>
                         
                          <th>Productividad</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                       @foreach ($forestales as $cultivo) 
                          <tr>
                            <th> {{$cultivo->P38_plantacion}}</th>
                            <th>{{$cultivo->P39_area_forestal}}</th>
                            <th> {{$cultivo->P40_Q_plantas}}</th>
                            <th>{{$cultivo->P41_finalidad_fores}}</th>
                            <th> {{$cultivo->P42_productividad_f}}</th>
                            
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    
                     

                     </div>

                       @elseif ($pregunta->option=="otropecuario")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                      @if ($respuesta->$variable=1) 
                      Si @else No @endif
                      
                        </div></div>

                       @elseif ($pregunta->option=="noagropecuario")
                      <div class="form-group row">
                       {!!Form::label($pregunta->variable,$pregunta->pregunta, ['class'=>'col-sm-9 from-control-label']) !!}  
                      <div class="col-sm-9">
                      {!! Form::radio($pregunta->variable, '1','1') !!} (Si <a href="{{'formulario-no-agropecuario'}}" target=_blank  onclick="window.open(this.href, this.target, 'width=900,height=500'); return false;">Relacione Actividades</a>)
                       
                       {!! Form::radio($pregunta->variable, '0') !!} <span>(No, continue)</span> </div></div>
                    @endif 
                     
                      

            
                        
                        
                      @endforeach
                      
                      
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      <input class="btn btn-primary" value="Editar Formulario" type="submit">
                       </div>
                        </div>
                                                  
                    {!! Form::close() !!}
                 
                     </div>
</div>
@endif
@endsection