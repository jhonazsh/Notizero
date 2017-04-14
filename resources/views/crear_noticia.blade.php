@extends('base')

@section('contenedor')
	<h1 class="text-center">Crear Noticia</h1>

	
	{{ Form::open(array('url'=>'/noticia/crear')) }}
	  <div class="form-group">
	    {{Form::label('Título de Noticia: ')}}
	    <input type="text" name="titulo" class="form-control" placeholder="Ingresa un Título">
	  </div>
	  <div class="form-group">
	    {{Form::label('Contenido de la Noticia:')}}
	    {{Form::textarea('contenido', null, ['placeholder'=>'Contenido...', 'class'=>'form-control'])}}
	  </div>
	  
	  <button type="submit" class="btn btn-default">Guardar Noticia</button>
	{{ Form::close() }}
	
@endsection