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
			</table>
		</div>
	</div>
@endsection

