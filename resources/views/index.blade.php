@extends ('master')
@section ('titulo','EPI Sanjuanito')
@section('dasboard','EPI Sanjuanito')
@section ('contenido')
<section class="dashboard-counts no-padding-bottom">

<div class="container-fluid">
              <div class="row bg-white has-shadow">
              <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-screen"></i></div>
                    <div class="title"><span>Total<br>de Respuestas</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 1%; height: 4px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>0</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>de Preguntas</span>
                      <div class="progress">
                        <div role="progressbar" style="width:{{$preguntas->count()/98*100}}%; height: 4px;" aria-valuenow="{{$preguntas->count()}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$preguntas->count()}}</strong></div>
                  </div>
                </div>
                <!-- Item -->

                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Usuarios</span>
                      <div class="progress">
                        <div role="progressbar" style="width: {{$usuarios->count()}}%; height: 4px;" aria-valuenow="{{$usuarios->count()}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$usuarios->count()}}</strong></div>
                  </div>
                </div>
                
              
              </div>
            </div>
   
@endsection