@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				

				
				@include('partials.validation-errors')


				<form  class="bg-white py-3 px-4 shadow-sm rounded" 
				method="POST" action="{{route('projects.update', $project) }}">
					@method('PATCH')
					<h1 class="display-4">
						Editar Proyecto
					</h1>
					<hr></hr>

					@include('partials._form', ['btnText' => 'Editar'])
					<a class="btn btn-link btn-block" href="{{route('projects.index')}}">
						Cancelar
					</a>

				</form>
			</div>
		</div>
	</div>

@endsection
