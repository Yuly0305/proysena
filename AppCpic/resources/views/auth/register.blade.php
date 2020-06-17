@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
              <img src="{{asset('imgs/register.png')}}" alt="" height="370px" class="card-img-top">
              <div class="card-title text-center">
                <h4>
                  <i class="fa fa-users"></i>
                {{__('custom.title-register')}}
                </h4>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
              						<form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
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
              							<div class="form-group justify-content-center">

              								<button type="submit" class="btn  btn-block btn-custom"  data-toggle="buttons">
                                Registrarse
              								<i class="fa fa-save"></i>
              								</button>
              							</div>

              						</form>
              					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
