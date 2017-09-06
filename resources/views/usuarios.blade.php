@extends('master')
@section('titulo','Usuarios')
@section('dashboard','Usuarios')
@section('contenido')
@if ( Auth::user()->rol=='estudiante')
        <div class="card"> <h3> No esta autorizado para editar usuarios</h3></div>
       @else 
       @include('flash::message')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Crear Usuario</h3>
                    </div>
        <div class="card-body">
                     
                    
                      {!! Form::open(['route'=> 'usuarios.store','method'=>'POST','class'=>'form-horizontal'])!!}
                      <div class="form-group row">
                        {!! Form::label('name', 'Nombre', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('name', null, ['class'=>'form-control form-control-success', 'placeholder' =>'Nombre Completo','required']) !!}
                        </div>
                      </div>
                     
                    
                      <div class="form-group row">
                        {!! Form::label('rol', 'Rol', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">         
                        {!! Form::select('rol',['investigador'=>'Investigador','estudiante'=>'Estudiante'], null, ['class'=>'form-control form-control-success','required','placeholder'=>'Seleccione...']) !!}                                          
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('email', 'Email', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::email('email', null, ['class'=>'form-control form-control-success', 'placeholder' =>'user@visualinventory.com','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('password', 'Contraseña', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::password('password', ['class'=>'form-control form-control-success', 'placeholder' =>'************','required']) !!}
                        </div>
                      </div>
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      {!! Form::submit('Crear Usuario', ['class'=>'btn btn-primary']) !!}
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
                      <h3 class="h4">Listado de Usuarios</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Email</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($Users as $User)
                          <tr>
                            <th scope="row"><a href="#">{{$User->id}}</th>
                            <th>{{$User->name}}</th>
                            <td>{{$User->rol}}</td>
                            <td>{{$User->email}}</td>
                            <td>  <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> </button>
								  <button href="{{route('usuarios.edit',$User->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button href="{{route('usuarios.destroy',$User->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </button>
													  
                            </td>
                          
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                      {!!$Users->links()!!}
                    </div>
                  </div>
              @endif  
@endsection