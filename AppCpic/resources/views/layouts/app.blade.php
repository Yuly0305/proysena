<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>



    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark  bg-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('imgs/sena.png')}}" class="sena" alt="" width="80px">
                    {{-- {{ config('app.name','sena') }} --}}

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active home">

                        <a  class="nav-link"  href="{{url('dashboard-admin')}}" >
                          <i class="fa fa-home"></i>
                          {{__('custom.home')}} </a>

                    </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('login') }}">
                                <i class=" fa fa-lock"></i>
                              {{ __('custom.login') }}

                            </a>

                        </li>
                        <li class="nav-item"><span class="nav-link">|</span></li> -

                        @if (Route::has('register'))
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('register') }}">
                              <i class=" fa fa-user"></i>
                              {{ __('custom.register') }}

                            </a> 
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown lista-modulos">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fullname }} <span class="caret"></span>
                                <img  class="img-img-thumbnail rounded-circle user-photo " src="{{ asset(Auth::user()->photo)}}" width="40px" alt="">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a  class="dropdown-item" href="{{url('users')}}">
                              <i class="far fa-user"></i>
                              Mi Perfil
                            </a>
                            <div class="dropdown-divider">
                              
                            </div>
                            <a  class="dropdown-item" href="{{url('trimestres')}}">
                              <i class="fa fa-align-left"></i>
                              Módulo Trimestres
                            </a>
                            <a  class="dropdown-item" href="{{url('ofertas')}}">
                              <i class="fa fa-envelope-open-text"></i>
                              Módulo Ofertas
                            </a>
                            <a  class="dropdown-item" href="{{url('municipios')}}">
                              <i class="fas fa-map-marked-alt"></i>
                              Módulo Municipios
                            </a>
                            <a  class="dropdown-item" href="{{url('nivel-formacion')}}">
                              <i class="fa fa-graduation-cap"></i>
                              Módulo Nivel-Formación
                            </a>
                            <a  class="dropdown-item" href="{{url('programas')}}">
                              <i class="fa fa-braille"></i>
                              Módulo Programas
                            </a>
                            <a  class="dropdown-item" href="{{url('eventos')}}">
                              <i class="far fa-calendar-alt"></i>
                              Módulo Eventos
                            </a>
                            
                            <div class="dropdown-divider">

                            </div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-reply-all"></i>
                                    {{ __('custom.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="{{ asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/sweetalert2@9.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro?',
                    text: "Desea eliminar este registro!",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#00796b',
                    cancelButtonColor: '#c20031',
                    confirmButtonText: 'Aceptar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.value) {
                      $(this).parent().submit();
                    }
                });
              });
                @if (session('message'))
                  Swal.fire(
                    'Felicitaciones',
                    '{{ session('message')}}',
                    'success'
                  );

                @endif

                $('.btn-upload').click(function(event){
                  $('#photo').click();
                });
                $('#photo').change(function(event){
                  var fileName= event.target.files[0].name;

                  var reader = new FileReader();
                  reader.onload = function(event){
                    $('#preview').attr('src',event.target.result);
                  };
                  reader.readAsDataURL(this.files[0]);
                });


                $('body').on('keyup','#qsearch',function(event){
                  event.preventDefault();
                  $q=$(this).val();
                  $t=$('input[name=_token]').val();
                  $('.loader').removeClass('d-none');
                  $('.table').hide();
                  $sto= setTimeout(function(){
                    clearTimeout($sto);
                    $.post('users/search', {

                      q:    $q,
                      _token: $t},function(data){
                      $('.loader').addClass('d-none');

                      $('#users-content').html(data);
                      $('.table').fadeIn('slow');
                      });
                    },900);
                  });

                });

    </script>
</body>

</html>
