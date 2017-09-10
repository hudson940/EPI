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
                      <h3 class="h4">Editar Usuario</h3>
                    </div>
        <div class="card-body">
                     
                    
                      {!! Form::open(['route'=> ['usuarios.update',$user->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
                      <div class="form-group row">
                        {!! Form::label('name', 'Nombre', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::text('name', $user->name, ['class'=>'form-control form-control-success', 'placeholder' =>'Nombre Completo','required']) !!}
                        </div>
                      </div>
                     
                    
                      <div class="form-group row">
                        {!! Form::label('rol', 'Rol', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">         
                        {!! Form::select('rol',['investigador'=>'Investigador','estudiante'=>'Estudiante','experto'=>'Experto'], $user->rol, ['class'=>'form-control form-control-success','required','placeholder'=>'Seleccione...']) !!}                                          
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('email', 'Email', ['class'=>'col-sm-3 from-control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::email('email', $user->email, ['class'=>'form-control form-control-success', 'placeholder' =>'user@visualinventory.com','required']) !!}
                        </div>
                      </div>
                      
                      <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                      {!! Form::submit('Editar Usuario', ['class'=>'btn btn-primary']) !!}
                       </div>
                        </div>
                    </div>
                    
                    {!! Form::close() !!}
                     
                    
    </div>
@endif
@endsection