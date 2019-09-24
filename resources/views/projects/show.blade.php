
@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')

	@auth
		<a href="{{route('projects.edit', $project)}}">Editar</a>
	@endauth



	<form method="POST"	action="{{route('projects.destroy', $project)}}">
		@csrf 
		@method('DELETE')
		@auth
			<button>Eliminar</button>
		@endauth
	</form>



	<h1>Titulo: {{$project->title}}</h1>
	<p>Descripcion: {{$project->description}}</p>
	<p>Fecha Creado: {{$project->created_at->diffForHumans()}}</p>



@endsection
