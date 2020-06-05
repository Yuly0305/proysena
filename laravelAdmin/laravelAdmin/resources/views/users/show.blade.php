

@extends('layouts.app')
@section('title','Consultar Usuario')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i>Consultar Usuario</h1>

				<br>

				<a  class=" btn btn-custom" href="{{ url('users') }}">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>

				<br><br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img src="{{ asset($user->photo) }}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre Completo:</th>
						<td>{{ $user->fullname }}</td>
					</tr>
					<tr>
						<th>Correo Electrónico:</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Teléfono:</th>
						<td>{{ $user->phone }}</td>
					</tr>
					<tr>
						<th>Fecha de Nacimiento:</th>
						<td>
							{{ $user->birthdate }}
							&nbsp; | &nbsp;
							@php use \Carbon\Carbon; @endphp
							{{ Carbon::createFromDate($user->birthdate)->diff(Carbon::now())->format('%y años, %m meses y %d días') }}
						</td>
					</tr>

					<tr>
						<th>Genero:</th>
						<td>
							@if ($user->gender == "Female")
							Mujer
							@else
							Hombre
							@endif
						</td>
					</tr>
					<tr>
						<th>Direccion:</th>
						<td>{{ $user->address }}</td>
					</tr>
					<tr>
						<th>Rol:</th>
						<td>{{ $user->role }}</td>
					</tr>
					<tr>
						<th>Estado:</th>
						<td>
							@if ($user->status == "1")
							<span class="btn btn-custom">Activo</span>
							@else
							<span class="btn btn-danger">Inactivo</span>
							@endif
						</td>
					</tr>


				</table>

			</div>
		</div>
	</div>
@endsection
