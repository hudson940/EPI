@extends('master')
@section('titulo','Formulario no Agropecuario')
@section('dashboard','Formulario/No Agropecuario')
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
                      <h3 class="h4">Formulario en PDF</h3>
                    </div>
        <div class="card-body">
             <iframe src="http://docs.google.com/gview?url=http://episanjuanito.tk/archivos/instrumento.pdf&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>        
           
                     
                     </div>
</div>
@endsection