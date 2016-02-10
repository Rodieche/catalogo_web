@extends('template.admin.main')

@section('title', 'Editar Usuario')

@section('title_panel','Editar usuario ' . $user->name)

@section('body_panel')

	{!! Form::open(array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) !!}
    
		<div class="form-group">
			 <i class="fa fa-smile-o"></i>
			 {!! Form::label('name', 'Nombre') !!}
			 {!! Form::text('name', $user->name, ['class'	=>	'form-control', 'placeholder'	=>	'Nombre completo' ,'required']) !!}
		</div>

		<div class="form-group">
			 <i class="fa fa-envelope-o"></i>
			 {!! Form::label('email', 'Correo electronico') !!}
			 {!! Form::email('email', $user->email, ['class'	=>	'form-control', 'placeholder'	=>	'example@mydomain.com' ,'required']) !!}
		</div>

		<div class="form-group">
			<i class="fa fa-users"></i>
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',['root' => 'Administrador', 'user' => 'Miembro'],null,['class'=> 'form-control']) !!}
		</div>

		<div class="form-group">
			 {!! Form::submit('Cambiar',['class' => 'btn btn-success pull-right']) !!}
		</div>

	{!! Form::close() !!}

@endsection