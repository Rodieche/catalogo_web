<!DOCTYPE html>
<html lang="es">
<head>
	<mete charset="UTF-8">
	<title> @yield('title', 'Default') | Panel de Administracion </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link href="{{ asset('plugins/bootstrap/js/bootstrap.js') }}">
</head>
<body>

	@include('admin.template.partials.nav')
	
	<section>
		@yield('body')
	</section>

</body>
</html>