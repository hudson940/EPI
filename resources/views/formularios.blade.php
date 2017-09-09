 protected $fillable=[
@foreach ($preguntas as $pregunta)
'{{$pregunta->variable}}',
@endforeach
 ];

<h1>{{count($preguntas)}}</h1>
Schema::create('formulario_generales', function (Blueprint $table) {
@foreach ($preguntas as $pregunta)
@if($pregunta->placeholder=='varchar')
<p>$table->string('{{$pregunta->variable}}',90)->nullable();</p>
@elseif($pregunta->placeholder=='integer')
<p>$table->{{$pregunta->placeholder}}('{{$pregunta->variable}}')->nullable();</p>
@elseif($pregunta->placeholder=='decimal')
<p>$table->{{$pregunta->placeholder}}('{{$pregunta->variable}}',10,2)->nullable();</p>

@endif
@endforeach
 }

