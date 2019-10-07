@extends('layout')

@section('title')
	About
@endsection

@section('content')
	


	<div class="container">
		<div class="row">

			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/About.svg" alt="Quienes Somos">
			</div>	

			<div class="col-12 col-lg-6">
				<h1>@lang('About')</h1>
				

				

				<h1 class="display-4 text-primary">Primera Pagina Laravel</h1>
				<p class="lead text-secondary">
					Es ligero, breve (cosa que, salvo en lides amatorias, siempre se agradece) y cómodo de llevar. Portada sin muchas ambiciones estéticas: fondo blanco, tipografías negras y rojas, dos líneas horizontales.
				</p>
					
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contactos') }}">
					Contactanos
				</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index' )}}">
					Portafolio
				</a>

				

			</div>
			
		</div>
	</div>


@endsection