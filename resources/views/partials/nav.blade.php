	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		
		<div class="container">

			<a class="navbar-brand" href="{{ route('home') }}">
				{{config('app.name')}}
			</a>
		
			<button class="navbar-toggler" 
				type="button" 
				data-toggle="collapse" 
				data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" 
				aria-expanded="false" 
				aria-label="{{ __('Toggle navigation') }}">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">

	        	<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link {{ setActive('home') }}" href="/">
							@lang('Home')
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">
							@lang('About')
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{ setActive('contactos') }}" href="{{route('contactos')}}">
							@lang('Contact')
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{ setActive('politicas') }}" href="{{route('politicas')}}">
							@lang('Policies')
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{ setActive('projects.*') }}" href="{{route('projects.index')}}">
							@lang('Portfolio')
						</a>
					</li>

					@guest

						<li class="nav-item">
							<a class="nav-link {{ setActive('login.*') }}" href="{{ route('login') }}">
								Login
							</a>
						</li>

					@else

						<li>
							<a href="#" onclick="event.preventDefault();
		                    	document.getElementById('logout-form').submit();"> {{ __('Logout') }}
		                	</a>
		                </li>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            	@csrf
		                @Cerrar Sesion
		            </form>
					@endguest
				</ul>
	        </div>

		</div>
		
	</nav>
