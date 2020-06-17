@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-6">
          <div class="card-img">
            <img src="{{asset('imgs/login.jpg')}}" alt="" height="350px" width="550px" class="card-img-left">

          </div>
        </div>

        <div class="col-6">
          <h4>
            <div class="card-title text-center">
              <i class="fa fa-lock"></i>
              {{__('custom.title-login')}}
            </div>

          </h4>

          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group ">
                <label for="email" class="text-md-right">{{ __('custom.email') }}</label>


                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>

                <div class="form-group ">
                  <label for="password" class="text-md-right">{{ __('custom.password') }}</label>

                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                  </div>
                  <div class="form-group  mb-0">
                    <button type="submit" class="btn btn-block btn-custom mb-2">

                      {{ __('custom.btn-login') }}
                      <i class="fa fa-arrow-right"></i>
                    </button>

                    @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('custom.password-request') }}
                      </a>
                    @endif

                  </div>
                </form>
              </div>


            </div>


        </div>
      </div>
    @endsection
