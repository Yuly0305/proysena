
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre Completo</th>
          <th>Correo Electrónico</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Rol</th>
          <th>Genero</th>

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
            <td>{{$user->gender}}</td>


          </tr>

        @endforeach
      </tbody>
    </table>
