<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de todos los usuarios</title>
	<style>
		table {
			
			border: 1px solid #999;
			border-collapse: collapse;
		}
		table th, table td {

			font-family: sans-serif;
			font-size: 14px;
			border: 1px solid #999;
			padding: 10px; 
		}
		table th {
			background-color: #666;
			color: #fff;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Completo</th>
				<th>Correo Electronico</th>
				<th>Telefono</th>
				<th>Rol</th>
				<th>Foto</th>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->fullname }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->phone }}</td>
					<td>{{ $user->role }}</td>
					<td>
						<img src="{{ public_path().'/'.$user->photo }}" width="40px">
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>