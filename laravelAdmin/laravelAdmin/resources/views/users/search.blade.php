@foreach ($users as $user)
  <tr>
    <td>{{ $user->fullname }}</td>
    <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>
        <a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-custom">
          <i class="fa fa-search"></i>
        </a>
          <a href="{{ url('users/'.$user->id.'/edit/') }}" class="btn btn-sm btn-custom">
          <i class="fa fa-pen"></i>
        </a>
        <form action=" {{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
          @csrf
          @method('delete')
          <button type="button" class="btn btn-sm btn-danger btn-delete">
            <i class=" fa fa-trash"></i>
          </button>
        </form>
      </td>
  </tr>
@endforeach
