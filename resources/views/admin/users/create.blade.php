@extends('template.admin.main')

@section('title', 'Crear Usuario')

@section('title_panel','Crear Usuario')

@section('body_panel')

	{!! Form::open(array('route' => 'admin.users.store')) !!}
    
		<div class="form-group">
			 {!! Form::label('name', 'Nombre') !!}
			 {!! Form::text('name', null, ['class'	=>	'form-control', 'placeholder'	=>	'Nombre completo' ,'required']) !!}
		</div>

		<div class="form-group">
			 {!! Form::label('email', 'Correo electronico') !!}
			 {!! Form::email('email', null, ['class'	=>	'form-control', 'placeholder'	=>	'example@mydomain.com' ,'required']) !!}
		</div>

		<div class="form-group">
			 {!! Form::label('password', 'Contraseña') !!}
			 {!! Form::password('password', ['class'	=>	'form-control', 'placeholder'	=>	'No digas a nadie tus contraseñas' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',['' => 'Selecciona el tipo de usuario','root' => 'Administrador', 'user' => 'Miembro'],null,['class'=> 'form-control']) !!}
		</div>

		<div class="form-group">
			 {!! Form::submit('Registrar',['class' => 'btn btn-success pull-right']) !!}
		</div>

	{!! Form::close() !!}

@endsection