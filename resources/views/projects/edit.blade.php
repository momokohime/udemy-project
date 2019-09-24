@extends('layout')

@section('title')
	Portafolio
@endsection

@section('content')
	<h1>Editar Formulario</h1>

	<style type="text/css">
		label12{
			color: green;
			font-style: bold;
			font-size: 20;
			font:20;
			font-weight: bold;

		}
	</style>


	@include('partials.validation-errors')


	<form method="POST" action="{{route('projects.update', $project) }}">
		@method('PATCH')


		@include('partials._form', ['btnText' => 'Editar'])
	</form>
@endsection
