	<table>
		<thead>
			<tr>
				<td>Id</td>
				<td>Nombre Completo</td>
				<td>Correo Electronico</td>
				<td>Fecha de Nacimiento</td>
				<td>Telefono</td>
				<td>Genero</td>
				<td>Direccion</td>
				<td>Rol</td>
				<td>Foto</td>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->fullname }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->birthdate }}</td>
					<td>{{ $user->phone }}</td>
					<td>{{ $user->gender }}</td>
					<td>{{ $user->address }}</td>
					<td>{{ $user->role }}</td>
					<td>
						<img src="{{ public_path().'/'.$user->photo }}" width="40px">
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>