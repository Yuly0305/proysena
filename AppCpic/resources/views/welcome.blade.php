<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>App CPIC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
             body {

                background:url(imgs/fondo.jpg)no-repeat center;
                background-size: 100%;
                color: #636b6f;
                font-family: "Consolas", monospace;
                font-weight: bolder;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 55px;
                position: relative;
                bottom: -120px;
                text-shadow: 1px 1px 2px;
                color:#0E2B39;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                position: relative;
                bottom: -200px;
            }
            .href{
              font-size: 15px;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
              position: relative;
              bottom: -150px;
              color: #636b6f;
            }
          .img{
          height:175px;
          width: 195px;
          background-size:100px;
          position: relative;
          display:inline-block;
          bottom: -80px;
          border-radius: 20px;
          transition:  0.3s ease-in;
        
          }
          .img:hover{
            transform: scale(1.1);
            cursor: pointer;

          }
          .sticky-footer{
            position:relative;
            bottom: -380px;
          }


        </style>
    </head>
    <body>
            <div class="fondo">
            </div>
            <div class="content" >
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img">
                      <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="imgs/sena.png" width="200px"/></a>
                        {{-- <  class="href "href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"></a> --}}
                    </div>
                    <div class="title">
                        BIENVENIDOS
                        SENA-CPIC
                        <br>
                    </div>
                    <div class="links">
                        <div class="flex-center position-ref ">
                            @if (Route::has('login'))
                                <div class=" links">
                                    @auth
                                        <a href="{{ url('/home') }}">Inicio</a>
                                    @else

                                        <a href="{{ route('login') }}" >Iniciar Sesión</a>


                                    @endauth
                                </div>
                            @endif
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span>Todos los Derechos Reservados &copy; <?php echo date('Y') ?></span>
                  </div>
                </div>
              </footer>
            </div>
        </div>
      </div>
    </div>
</body>

</html>
