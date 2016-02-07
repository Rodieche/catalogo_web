@extends('template.admin.main')

@section('title', 'Lista de usuarios')

@section('title_panel','Lista de Usuarios')

@section ('body_panel')

	<a href="{{ route('admin.users.create') }}" class="btn  btn-info">Ingresar un nuevo usuario</a>
	
	<table class="table table-striped margin-top">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>E-Mail</th>
			<th>Tipo</th>
			<th>Accion</th>
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
					<td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>

	{!! $users->links() !!}

@endsection