@extends ('master')
@section ('titulo','Respuestas')
@section('dasboard','Respuestas')

@section ('contenido')
 @if ( Auth::User()->rol=='investigador')
      
       @include('flash::message')



<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Respuestas</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Encuesta</th>
                            <th>Usuario</th>
                            
                            <th>Editar</th>
                          <th>Borrar</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($respuestas as $respuesta)
                          <tr>
                            <th scope="row"><a href="{{route('respuestas.edit',$respuesta->P1_cod_pred)}}">{{$respuesta->P1_cod_pred}}</th>
                            <th>{{$respuesta->usuario}}</th>
                           
                            <td> 
								  <a href="{{route('respuestas.edit',$respuesta->P1_cod_pred)}}" class="btn btn-sm btn-warning">Editar<i class="fa fa-pencil"></i> </a>
								 </td><td>
                   {!! Form::open(['route'=> ['respuestas.destroy',$respuesta->id],'method'=>'DELETE','class'=>'hidden'])!!}                    
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Borrar<i class="fa fa-times"></i> </button>
											{!! Form::close() !!}
  
                            </td>
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                      {!!$respuestas->links()!!}
                    </div>
                  </div>
                     @else 
  <div class="card"> <h3> No esta autorizado para ver Respuestas</h3></div>
    
 @endif
@endsection