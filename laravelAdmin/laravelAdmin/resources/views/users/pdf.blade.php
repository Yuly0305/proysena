<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Todos los Usuarios</title>
    <style>
    table{

      border: 1px solid #999;
      border-collapse: collapse;
    }
    table td, table th{
        border: 1px solid #999;
        padding: 10px;
        font-family: sans-serif;
        font-size: 13px;
    }
    table th{
      background-color: #666;
      color: #fff;
    }
    table tr:nth-child(even) {
    background-color: #eee;
}

table tr:nth-child(odd) {
    background-color: #fff;
}

    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre Completo</th>
          <th>Correo Electrónico</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Rol</th>
          <th>Foto</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->fullname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->role}}</td>
            <td>
              <img src="{{public_path().'/'.$user->photo}}" width="50px">
            </td>


          </tr>

        @endforeach
      </tbody>
    </table>

  </body>
</html>
