@extends ('master')
@section ('titulo','Mapa')
@section('dasboard','Mapa')
@section ('contenido')
<a href="{{asset('storage/veredas-sanjuanito.kmz')}}" >Descargue el mapa Aqui</a>

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HT8a5LoZ6b3lVE0ZkyOydAXgwmY" width="840" height="680"></iframe>

 @endsection