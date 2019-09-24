@extends('layout')


@section('title')
	Home
@endsection


@section('content')
	<h1>HOME</h1>

	@auth
		<strong>Bienvenido {{auth()->user()->name }}</strong>
	@endauth
	


	

@endsection