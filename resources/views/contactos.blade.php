@extends('layout')


@section('title')
	{{__('Contact')}}
@endsection

@section('content')
	<h1>{{__('Contact')}}</h1>
		

	<form method="POST" action="{{ route('messages.store')}}">
		@csrf

		{!! $errors->first('name', '<small>:message</small><br>')  !!}
		Nombre
		<input name="name" placeholder="Nombre..." value="{{old('name')}}"><br>

		Email
		{!! $errors->first('email', '<small>:message</small><br>')  !!}
		<input name="email" type="email" placeholder="Email..." value="{{old('email')}}"><br>
		
		Asunto
		{!! $errors->first('subject', '<small>:message</small><br>')  !!}
		<input name="subject" placeholder="Asunto..." value="{{old('subject')}}"><br>
		
		Contenido
		{!! $errors->first('content', '<small>:message</small><br>')  !!}
		<textarea name="content" placeholder="Mensaje...">{{old('content')}}</textarea><br>
		
		<button>Enviar</button>

	</form>



		


@endsection