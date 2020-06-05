
@extends('layouts.app')
@section('title','modificar Usuario')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-pen"></i>modificar Usuario</h1>

				<br>
				<a href="{{ url('users') }}" class="btn btn-custom">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
				<br><br>

        <div class="form-group ">
          <form action="{{ url('users', $user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
						<input type="hidden" name="id" value="{{$user->id}}">
            <input class="form-control @error('fullname') is-invalid @enderror" type="text" name="fullname" value="{{ $user->fullname }}" placeholder="Nombre Completo">
							@error ('fullname')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>
            <input  class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $user->email  }}" placeholder="Correo Electrónico">
							@error ('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>
            <input  class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ $user->phone  }}" placeholder="Teléfono">
							@error ('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>
            <input  class="form-control @error ('birthdate') is-invalid @enderror" type="date" name="birthdate" value="{{ $user->birthdate  }}" placeholder="año de nacimiento">
							@error ('birthdate')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
						<div class=" form-group ">
							<select class="form-control @error('gender') is-invalid @enderror" name="gender">
								<option value="">Genero...</option>
								<option value="Male" @if ($user->gender =='Male') selected @endif>Hombre</option>
								<option value="Female" @if ($user->gender=='Female') selected @endif>Mujer</option>
							</select>
							@error ('gender')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<br>
						<div class="form-group">
							<button type="button" class="btn btn-block btn-custom btn-upload">
								<i class="fa fa-upload"></i>
								Seleccionar foto
							</button>
							<input type="file" name="photo" id="photo" class="d-none" accept="image/*">
							@error ('photo')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
							<div class="text-center @error('photo') is-invalid @enderror">
								<img id="preview" class="img-thumbnail"src="{{ asset($user->photo) }}"
								width="120px">
							</div>
						</div>
						@error ('photo')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
						@enderror
						<br>
						<br>
            <input  class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="{{ $user->address }}" placeholder="direccion">
							@error ('address')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>


            <div class="row justify-content-center">
              <button type="submit" class="btn btn-success "  data-toggle="buttons"> Modificar </button>
            </div>

          </form>
        </div>

			</div>
		</div>
	</div>
@endsection
