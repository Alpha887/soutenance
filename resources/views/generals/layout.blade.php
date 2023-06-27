<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description"
            content="investment solution">
	<title>@yield('title') | {{ env('APP_NAME') }}</title>

	@include('generals.css')
	
	@yield('stylesheets')

	@livewireStyles

</head>
<body>
	@include('generals.header')

	@yield('content')

	@include('generals.footer')

	
	@yield('javascripts')
	@include('generals.js')
	@livewireScripts
		
</body>
</html>