<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/app.js" defer></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">




	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>

	<div class="app d-flex flex-column h-screen justify-content-between">

		<header>
			@include('partials/nav')
			@include('partials.session-status')

		</header>

		<main class="py-4">
			@yield('content')

		</main>

		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{config('app.name')}} | Copyright @ {{ date('Y') }}

		</footer>

		
		


	</div>
	
</body>
</html>