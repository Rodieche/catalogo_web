@extends('template.admin.main')

@section('title')
    Inicio de mi pagina
@endsection

@section('title_panel', 'Bienvenido al Catalogo de FrontalGeek')
    
@section('body_panel')
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4 col-lg-4 col-sm-1 col-xs-1">
    			<h2 class="text-center">SERIES</h2>
          <img src="images/series.png" style="max-width: 80%;">
    			<p class="margin-top">Todas las series de nuestro catalogo</p>
   			 </div>
   			 <div class="col-md-4 col-lg-4 col-sm-1 col-xs-1">
    			<h2 class="text-center">PELICULAS</h2>
          <img src="images/movies.png" style="max-width: 80%;">
    			<p class="margin-top">Todas las series de nuestro catalogo</p>
   			 </div>
   			 <div class="col-md-4 col-lg-4 col-sm-1 col-xs-1">
    			<h2 class="text-center">JUEGOS</h2>
          <img src="images/Games.png" style="max-width: 80%;">
    			<p class="margin-top">Todas las series de nuestro catalogo</p>
   			 </div>

    	
  		</div>
    </div>
    
@endsection
