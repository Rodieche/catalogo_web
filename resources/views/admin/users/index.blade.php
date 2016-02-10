@extends('template.admin.main')

@section('title', 'Lista de usuarios')

@section('title_panel','Lista de Usuarios')

@section ('body_panel')
	
	<a href="{{ route('admin.users.create') }}" class="btn  btn-info">Ingresar un nuevo usuario</a>
	
	<table class="table table-striped margin-top">
		<thead>
			<th class="text-center">ID</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">E-Mail</th>
			<th class="text-center">Tipo</th>
			<th class="text-center">Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "user")
							<span class="label label-info">Usuario</span>
						@else
							<span class="label label-success">Administrador</span>
						@endif
					</td>
					<td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 
					<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que desea eliminar al usuario {{ $user->name }} ?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>


	{!! $users->links() !!}

@endsection