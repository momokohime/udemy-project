@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')
	<h1>PORTAFOLIO</h1>

	 @auth
	 	<button onclick="window.location='{{ route('projects.create')}}'">Crear</button>
	 @endauth

	<ul>

		@forelse($projects as $project)
			<li><strong><a href=" {{route('projects.show', $project)}}">{{$project->title}}</a>:</strong>  {{$project->description}}   </li>  
	

		@empty
			No hay Elementos

		@endforelse
		{{ $projects -> links() }}

	</ul>



@endsection
