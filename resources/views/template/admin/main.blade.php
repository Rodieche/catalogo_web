<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')| Pagina del Administrador</title>
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/main.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	@include('template.admin.partials.nav')

    <div class="panel panel-default center-block angosto">
        <div class="panel-heading text-center">
            <h1 class="panel-title">@yield('title_panel')</h1>
        </div>
        <div class="panel-body">
            @include('flash::message')
            @yield('body_panel')
         </div>
    </div>

    <div class="panel panel-default center-block angosto margin-top">
        <div class="panel-body">
            <h5 class="text-right">FrontalGeek <small>hecho por geeks para geeks</small></h5>
         </div>
    </div>

</body>
</html>