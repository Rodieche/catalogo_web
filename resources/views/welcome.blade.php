@extends('template.admin.main')

@section('title')
    Inicio de mi pagina
@endsection

@section('body')
    <div class="panel panel-default center-block angosto">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Your models should implement Sluggable's interface and use it's trait. You should also define a protected property $sluggable with any model-specific configurations (see Configuration below for details):
         </div>
    </div>

@endsection
