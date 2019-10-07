@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')
	<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">

			<h1 class="display-4 mb-0">PORTAFOLIO</h1>

			 @auth
			 	<button class="btn btn-primary" onclick="window.location='{{ route('projects.create')}}'">Crear</button>
			 @endauth
	</div>


		<ul class="list-group">

			@forelse($projects as $project)


				<li class="list-group-item border-0 mb-3 shadow-sm">
						


					<a class="d-flex justify-content-between align-items-center " href="{{route('projects.show', $project)}}">
						<span class="text-secondary font-weight-bold">
							{{$project->title}}
						</span>
						<span>
							{{$project->created_at->format('d/m/Y')}}
						</span>
					</a>
						

				</li>  
		

			@empty
				No hay Elementos

			@endforelse
			{{ $projects -> links() }}

		</ul>
		
	</div>
	

@endsection
