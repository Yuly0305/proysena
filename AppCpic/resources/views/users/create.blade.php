@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')

    <div class="container">
	   <div class="col-md-6 offset-3">
            <h1> <i class="fa fa-plus"></i> 
            &nbsp;Crear Usuario</h1>
            <hr>
            <a href="{{ url('users') }}" class="btn btn-custom"> 
        	   <i class="fa fa-arrow-left"></i>
                Ir a Lista de Usuarios
            </a>
            <br><br>
            <form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Correo Electronico">
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  placeholder="Numero de Telefono">
                     @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}"  placeholder="Fecha de Nacimiento" >
                     @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
			    <div class="form-group">
                        <select name="gender" class="form-control  @error('gender') is-invalid @enderror">
                            <option value="">Genero...</option>
                            <option value="Male" @if (old('gender') == 'Male') selected @endif>Hombre</option>
                            <option value="Female" @if (old('gender') == 'Female') selected @endif>Mujer</option>
                        </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-custom btn-upload" type="button">
                        <i class="fa fa-upload"></i>
                        Seleccionar Foto
                    </button>
                    <input type="file" name="photo" id="photo" class="d-none" accept="image/*">
                    <br>
                    <div class="text-center @error('photo') is-invalid @enderror" >
                        <img  id="preview" class="img-thumbnail" src=" {{ asset('imgs/no-photo.png') }}" width="120px">
                    </div>
                     @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>  
                    @enderror
                </div>

                <div class="form-group">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"  value="{{ old('address') }}" placeholder="Direccion" >
                         @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{ old('password') }}"  placeholder="Contraseña" >
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  value="{{ old('password') }}"  placeholder="Confirmar Contraseña" >
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-custom">
                        <i class="fa fa-save"></i>
                        Guardar
                    </button>
                </div>
		        
    	    </form>
        </div>
    </div>
@endsection
