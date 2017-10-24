@extends('master')
@section('titulo','Formulario')
@section('dashboard','Formulario')
@section('contenido')
@if ( Auth::User()->rol=='investigador')
      
       @include('flash::message')
 @foreach ($forestales as $cultivo) 
 
   {!! Form::open(['route'=> ['formulariof.update',$cultivo->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
 
        
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
                       
                         
                      
                     
                       
                                   
                          <tr>
                            <th> @php $options=['class'=>'form-control'] @endphp
                            <div class="col-sm-9">
                   <select name="P38_plantacion" class="form-control form-control-success" >
                        <option class="strong" value="$cultivo->P38_plantacion">{{$cultivo->P38_plantacion}}</option>
                        @foreach ($listaCultivos as $lCultivo) 
                       <option value={!!$lCultivo->Cultivo_plantacion!!}>{!!$lCultivo->Cultivo_plantacion!!}</option>
                         @endforeach </select>
                       
                     
                        
                  </div>
                             </th>
                            <th>{!! Form::text('P39_area_forestal', $cultivo->P39_area_forestal, $options) !!}</th>
                            <th> {!! Form::text('P40_Q_plantas', $cultivo->P40_Q_plantas, $options) !!} </th>
                            <th> {!! Form::text('P41_finalidad_fores', $cultivo->P41_finalidad_fores, $options) !!}</th>
                            <th> {!! Form::text('P42_productividad_f', $cultivo->P42_productividad_f, $options) !!} </th>
                              <td>
                               
                             <button type="submit"  class="btn btn-sm btn-warning">Editar<i class="fa fa-pencil"></i> </button>
                                      
                  
											
  
                            </td>
                          
                          
                          
                         </tr> 
                       
                        </tbody>
                      </table> </form>  @endforeach

    @endif
    @endsection
    