<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name') }} - @yield('title')</title>
	@vite(['resources/scss/ruffy.scss'])
	@yield('head')
    </head>
    <body>
	<div class="content">
	    <div class="container header">
		<img src="{{ asset('/images/header.png') }}">
	    </div>
	    
	    <div class="container base">

		@if ($errors->any())
		    @foreach ($errors->all() as $error)
			<div class="alert">
			    <img src="{{ asset('/images/silk/thumb_down.png') }}" class="icon mr-5 silk"> {{ $error }}
			</div>
		    @endforeach
		@endif

		@if (session('success'))
		    <div class="alert">
			<img src="{{ asset('/images/silk/thumb_up.png') }}" class="icon mr-5 silk"> {{ session('success') }}
		    </div>
		@endif

		@auth
		<div class="header-buttons">
		    <a href="#" class="header-button">games</a>
		    <a href="#" class="header-button">catalog</a>
		    <a href="#" class="header-button">avatar</a>
		    <a href="#" class="header-button">develop</a>
		    
		    <span class="float-right">you are logged in as <b>ruffy</b></span>
		</div>
		@endauth

		<div class="columns @auth below-header @endauth">
		    <div class="column no-bg column-1">
			@yield('content-left')
		    </div>
		    <div class="column column-2 section-center">
			@yield('content-center')
		    </div>
		    <div class="column no-bg column-1">
			@yield('content-right')
		    </div>
		</div>  
	    </div>
	</div>
    </body>
</html>
