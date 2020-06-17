@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')

	<div class="container">
	   	<div class="col-md-6 offset-3">
			<h1> <i class="fa fa-search"></i>&nbsp;Consultar Usuarios</h1>
			<hr>
    		<a href="{{ url('users') }}" class="btn btn-custom"> 
        		<i class="fa fa-arrow-left" ></i>
            		Ir a Lista de Usuarios
           	</a>
    	 	<hr>
			<br><br>
			<table class="table table-striped">
				<tr>
					<td colspan="2" class="text-center">
						<img src="{{ asset($user->photo) }}" class="img-thumbnail" width="120px">
					</td>
				</tr>
				<tr>
					<th>Nombre Completo: </th>
					<td> {{ $user->fullname }} </td>
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
					<td> {{ $user->birthdate }}
	            			&nbsp; | &nbsp;
	            		@php use \Carbon\Carbon; @endphp
	            		{{Carbon::createFromDate($user->birthdate)->diff(Carbon::now())->format('%y años, %m mesdías')}}
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
					<th>Estado:</th>
					<td>
						@if ($user->status == "1")
	                   		<span class="btn btn-custom">Activo</span>
	               		@else
	                   		<span class="btn btn--custom-danger">Inactivo</span>    
	               		@endif
					</td>
				</tr>
				<tr>
					<th>Direccion:</th>
					<td>{{ $user->address }}</td>
				</tr>
				<tr>
					<th>Contraseña:</th>
					<td>{{ $user->password }}</td>
				</tr>
			</table>
		</div>
	</div>
@endsection

