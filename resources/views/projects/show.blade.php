
@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')




	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1 class="">
				Titulo: {{$project->title}}
			</h1>

			<p class="text-secondary">
				Descripcion: {{$project->description}}
			</p>

			<p class="text-secondary">
				Fecha Creado: {{$project->created_at->diffForHumans()}}
			</p>

	
			<div class="d-flex justify-content-between align-items-center">
					<a  href="{{route('projects.index')}}">Regresar</a>

					@auth
						<div class="btn-group btn-group-sm">
							<a class="btn btn-primary" 
								href="{{route('projects.edit', $project)}}">
								Editar
							</a>
						
							<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
								Eliminar
							</a>
						</div>


							<form class="d-none" id="delete-project" method="POST"	action="{{route('projects.destroy', $project)}}">
								@csrf 
								@method('DELETE')
								{{-- @auth
									<button class="btn btn-danger">Eliminar</button>
								@endauth --}}
							</form>
						
					@endauth

				

			</div>
			
			
		


			
			
		</div>

	</div>


@endsection
