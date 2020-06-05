@extends('layouts.app')
@section('title','Adicinar de Programa')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6">

				<h1>
					<i class="fa fa-plus"></i>Adicionar Programa</h1>
					<hr>

					<a  class="btn btn-custom"href="{{ url('programas') }}">
						<i class="fa fa-arrow-left"></i>
						Ir a Lista de Usuarios
					</a>
					<hr>
				{{--}}<-----	BLOQUE DE ALERTAS ----->
					 {{-- @if ($errors->any())
						<ul class="alert alert-danger">
							@foreach ($errors->all() as $message)
									<li>{{$message}}</li>

							@endforeach

				@endif
					 </ul> --}}
					<div class="form-group ">
						<form action="{{ url('programas') }}" method="post" enctype="multipart/form-data">
							@csrf
							<input class="form-control @error ('fullname') is-invalid @enderror" type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
							@error ('fullname')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
							<input  class="form-control @error ('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
								@error ('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>
							<input  class="form-control @error ('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
								@error ('phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>
							<input  class="form-control @error ('birthdate') is-invalid @enderror" type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="año de nacimiento">
							@error ('birthdate')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
							<div class=" form-group input-group mb-3 ">
								<select class="custom-select  @error ('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}">

									<option value="">Genero...</option>
									<option value="Male" @if (old('gender')=='Male')selected @endif>Hombre</option>
									<option value="Female" @if (old('gender')=='Female')selected @endif>Mujer</option>
								</select>
								@error ('gender')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>

							<div class="form-group">
								<button type="button" class="btn btn-block btn-custom btn-upload">
									<i class="fa fa-upload"></i>
									Seleccionar foto
								</button>
								<input type="file" name="photo" id="photo" class="d-none" accept="image/*">
								<br>
								<div class="text-center @error('photo') is-invalid @enderror">
									<img id="preview" class="img-thumbnail"src="{{ asset('imgs/no-photo.png') }}"
									width="120px">
								</div>
							</div>
							@error ('photo')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>

							<input  class="form-control @error ('address') is-invalid @enderror" type="text" name="address" value="{{ old('address') }}" placeholder="Direccion">
								@error ('address')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>
							<input  class="form-control  @error ('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña">
								@error ('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>
							<input  class="form-control @error ('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" value="{{ old('password') }}" placeholder="Confirmar contraseña">
								@error ('password_confirmation')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>
							<div class="row justify-content-center">

								<button type="submit" class="btn btn-custom"  data-toggle="buttons"> Guardar
								<i class="fa fa-save"></i>
								</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		@endsection
