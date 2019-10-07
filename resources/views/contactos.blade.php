@extends('layout')


@section('title')
	{{__('Contact')}}
@endsection

@section('content')
	
	<div class="container">
		
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				
			
				<form class="bg-white shadow rounded py-3 px-4" 
					method="POST" 
					action="{{ route('messages.store')}}">
						@csrf


						<h1 class="display-4 mx-auto">{{__('Contact')}}</h1>


						<div class="form-group">
							<label for="name">Nombre</label>
							<input class="form-control bg-light shadow-sm 
							@error('name') is-invalid @enderror" 
								name="name" 
								placeholder="Nombre..." 
								value="{{old('name')}}">
								{{-- {!! $errors->first('name', '<small>:message</small><br>')  !!} --}}
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
						</div>







						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control bg-light shadow-sm 
							@error('email') is-invalid @enderror" 
								name="email" 
								placeholder="Email..." 
								value="{{old('email')}}">
								{{-- {!! $errors->first('name', '<small>:message</small><br>')  !!} --}}
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
						</div>



						<div class="form-group">
							<label for="subject">Asunto</label>
							<input class="form-control bg-light shadow-sm 
							@error('subject') is-invalid @enderror" 
								name="subject" 
								placeholder="Asunto..." 
								value="{{old('subject')}}">
								{{-- {!! $errors->first('name', '<small>:message</small><br>')  !!} --}}
								@error('subject')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
						</div>


						<div class="form-group">
							<label for="content">Mensaje</label>
							<textarea class="form-control bg-light shadow-sm 
							@error('content') is-invalid @enderror" 
								name="content" 
								placeholder="Mensaje..." 
								value="{{old('content')}}"></textarea>
								{{-- {!! $errors->first('name', '<small>:message</small><br>')  !!} --}}
								@error('content')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
						</div>



















						{{-- Email
						{!! $errors->first('email', '<small>:message</small><br>')  !!}
						<input name="email" type="email" placeholder="Email..." value="{{old('email')}}"><br>
						
						Asunto
						{!! $errors->first('subject', '<small>:message</small><br>')  !!}
						<input name="subject" placeholder="Asunto..." value="{{old('subject')}}"><br>
						
						Contenido
						{!! $errors->first('content', '<small>:message</small><br>')  !!}
						<textarea name="content" placeholder="Mensaje...">{{old('content')}}</textarea><br>
						 --}}
						<button class="btn-primary btn btn-lg btn-block">@lang('Send')</button>
				</form>

			</div>			
		</div>
</div>

		


@endsection