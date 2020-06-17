@extends('layouts.app')
@section('title','Escritorio-Administrador')


@section('content')
<div class="container modulos">
    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <div class="card">
              <img src="{{asset('imgs/mod-trimestres.png')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('trimestres')}}" class="btn btn-block btn-custom">
                    Modulo Trimestres
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
              <img src="{{asset('imgs/mod-ofertas.jpg')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('ofertas')}}" class="btn btn-block btn-custom">
                    Modulo Ofertas
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
              <img src="{{asset('imgs/mod-municipios.jpg')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('municipios')}}" class="btn btn-block btn-custom">
                    Modulo Municipios
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
            <div class="card">
              <img src="{{asset('imgs/mod-nivel.png')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('nivel-formacion')}}" class="btn btn-block btn-custom">
                    Modulo Nivel-Formación
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
            <div class="card">
              <img src="{{asset('imgs/mod-programas.png')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('users')}}" class="btn btn-block btn-custom">
                    Modulo Usuarios
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
            <div class="card">
              <img src="{{asset('imgs/mod-eventos.jpg')}}" alt="" height="190px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('eventos')}}" class="btn btn-block btn-custom">
                    Modulo Eventos
                  </a>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
