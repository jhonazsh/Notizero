@extends('base')

@section('contenedor')
  	<h1>Noticias Recientes: </h1>

	@if(count($noticias)>0)

		@foreach( $noticias as $noticia )
		<div>
			<h2>{{ $noticia->titulo }}</h2>
	  		<p>{{ $noticia->contenido }}</p>
		</div>
		@endforeach
  
  	@else

  		<p>Por el momento no hay ninguna Noticia guardada.</p>

  	@endif

@endsection