@extends ('master')
@section ('titulo','Preguntas')
@section('dasboard','Preguntas')
@section ('contenido')


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
								  <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  
													  
                            </td>
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                      {!!$preguntas->links()!!}
                    </div>
                  </div>
@endsection