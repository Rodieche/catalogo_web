<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')| Pagina del Administrador</title>
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/main.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
</head>
<body>

	@include('template.admin.partials.nav')

	<div class="panel panel-default center-block angosto">
        <div class="panel-heading text-center">
            <h1 class="panel-title">@yield('title_panel')</h1>
        </div>
        <div class="panel-body">
            @yield('body_panel')
         </div>
    </div>

    <div class="panel panel-default center-block angosto margin-top">
        <div class="panel-body text-right">
            <h5>FrontalGeek <small>hecho por geeks para geeks</small></h5>
         </div>
    </div>

</body>
</html>