<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')| Pagina del Administrador</title>
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
</head>
<body>

	@include('template.admin.partials.nav')

	@yield('body')

</body>
</html>