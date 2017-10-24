@extends('master')
@section('titulo','Formulario')
@section('dashboard','Formulario')
@section('contenido')
@if ( Auth::User()->rol=='investigador')
      
       @include('flash::message')
 @foreach ($cultivos as $cultivo) 
 
   {!! Form::open(['route'=> ['formularioc.update',$cultivo->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
 
        
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
                       
                         
                      
                     
                       
                                   
                          <tr>
                            <th> @php $options=['class'=>'form-control'] @endphp
                            <div class="col-sm-9">
                   <select name="P27_cultivo" class="form-control form-control-success" >
                        <option class="strong" value="$cultivo->P27_cultivo">{{$cultivo->P27_cultivo}}</option>
                        @foreach ($listaCultivos as $lCultivo) 
                       <option value={!!$lCultivo->Cultivo_plantacion!!}>{!!$lCultivo->Cultivo_plantacion!!}</option>
                         @endforeach </select>
                       
                     
                        
                  </div>
                             </th>
                            <th>{!! Form::text('P28_area_sembrada', $cultivo->P28_area_sembrada, $options) !!}</th>
                            <th> {!! Form::text('P29_tipo', $cultivo->P29_tipo, $options) !!} </th>
                            <th> {!! Form::text('P30_cant_cosech', $cultivo->P30_cant_cosech, $options) !!}</th>
                            <th> {!! Form::text('P31_duracion', $cultivo->P31_duracion, $options) !!} </th>
                            <th> {!! Form::text('P32_finalidad', $cultivo->P32_finalidad, $options) !!}</th>
                            <th> {!! Form::text('P33_cant_autoC', $cultivo->P33_cant_autoC, $options) !!} </th>
                            <th> {!! Form::text('P34_area_autoC', $cultivo->P34_area_autoC, $options) !!}</th>
                            <th> {!! Form::text('P35_productividad', $cultivo->P35_productividad, $options) !!} </th>
                            <th> {!! Form::text('P36_tipo_semilla', $cultivo->P36_tipo_semilla, $options) !!}</th>
                         <td>
                               
                             <button type="submit"  class="btn btn-sm btn-warning">Editar<i class="fa fa-pencil"></i> </button>
                                      
                  
											
  
                            </td>
                          
                          
                          
                         </tr> 
                       
                        </tbody>
                      </table> </form>  @endforeach

    @endif
    @endsection
    