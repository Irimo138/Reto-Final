<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PicSite</title>
        <!--Linkear los estilos de la página-->
        <link rel="stylesheet" href="css/estilosIndex.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Linkear los scipts de bootstrap-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>    
        <script>
           window.onload = iniciar;
            let sizze = window.screen.width;

            function iniciar(){
                if(sizze > 576){
                    document.getElementById("mySidenav").style.width = "25%";
                    document.getElementById("main").style.marginLeft = "0";
                }
                else{
                    closeNav;
                }
            }

            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
                document.getElementById("page-content-wrapper").style.marginLeft = "25%";
            }
        
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("page-content-wrapper").style.marginLeft= "0";
            }
        </script>
    </head>
    <body id="wrapper">
        <aside id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn d-block d-sm-block d-md-none" onclick="closeNav()">&times;</a>
            <section class="row m-1">
                <img id="logo" class="mx-auto p-1 mt-4" src="images/logo1.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea" >
                <h3 class="imagotipo mx-auto">{{ trans('messages.logo') }}</h3>
            </section>
            <section class="contenidoAside">
                <a><b>{{ trans('messages.idioma') }}</b></a>
                <ul>
                    <li><a href="{{ url('lang', ['en']) }}"><img class="idiomaBandera" src="images/banderaIngles.png"></a></li>
                    <li><a href="{{ url('lang', ['es']) }}"><img class="idiomaBandera" src="images/banderaCastellano.jpg"></a></li>
                    <li><a href="{{ url('lang', ['eus']) }}"><img class="idiomaBandera" src="images/banderaEsukadi.png"></a></li>
                </ul>
                <h5>{{trans('messages.ideat')}}</h5>
                <div class="d-none d-sm-none d-md-block">
                    <p class="texto p-3 text-dark">{{trans('messages.parrafoi')}}</p>

                </div>
                <div class="d-block d-sm-block d-md-none">
                    <p class="texto p-3 text-dark">{{trans('messages.parrafoi2')}}</p>
                    <a href=".Foo" class="btn btn-default colorpalabra" data-toggle="collapse">{{trans('messages.mas')}}</a> 
                    <hr  class="mx-auto linea">
                    <div class="collapse Foo">  
                        <p class="texto p-3 text-dark">{{trans('messages.parrafoi3')}}</p>
                    </div> 
                </div>
            </section>
        </aside>
        <main id="page-content-wrapper">
            <article id="cabeza" class="d-block d-xs-block d-sm-none row m-1 container-fluid">
                <img id="logo" class="mx-auto p-1" src="images/logo12.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea" ></li>
                <h3 class="imagotipo mx-auto">{{ trans('messages.logo') }}</h3>
                <span class="d-block d-sm-block d-md-none" id="boton" onclick="openNav()">&#9776;</span>
            </article>
            <article class="page-content container no-gutter">
                <div class="row">
                    <section id="carrusel" class="col-12   m-0 p-0 container-fluid">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <!-- Aqui se especifican cuantos "botones" apareceran en las imagenes-->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <!-- Aquí se especifican las imagenes que apareceran y son de tipo carrusel. Además, ponemos el texto-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/carreteran.jpg" class="d-block mx-auto imagenesCarrusel">
                                    <div class="contenido2 carousel-caption d-none d-md-block">
                                        <h2 class="colorTitulo">{{ trans('messages.conp') }}</h2>
                                        <p>{{ trans('messages.con1') }}</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/microfono.jpg" class="d-block mx-auto imagenesCarrusel">
                                    <div class=" contenido2 carousel-caption d-none d-md-block">
                                        <h2 class="colorTitulo">{{ trans('messages.cons') }}</h2>
                                        <p>{{ trans('messages.con2') }}</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/tren.jpg" class="d-block mx-auto imagenesCarrusel">
                                    <div class="contenido2 carousel-caption d-none d-md-block ">
                                        <h2 class="colorTitulo">{{ trans('messages.cont') }}</h2>
                                        <p>{{ trans('messages.con3') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Aquí se indican los botones para pasar de una imagen a otra, exactamente la anterior y la siguiente-->
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                        <img class="imagenSelec" src="images/pared.jpg">
                        <div class="contenido">
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>{{ trans('messages.inicios') }}</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  ><h2>{{ trans('messages.einvitado') }}</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>{{ trans('messages.regist') }}</h2></a>
                        </div>
                    </section>
                </div>
            </article>
        </main>
        </section>
        <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Registro:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- REGISTRO -->
                    <div class="modal-body align-items-center justify-content-center">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                
                            <!-- Name -->
                            <div class="mt-4">
                                {{ trans('messages.nombre') }}
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                
                            <!-- Apellido -->
                            <div class="mt-4">
                                {{ trans('messages.apellido') }}
                                <x-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required />
                            </div>

                            <!-- nickname -->
                            <div class="mt-4">
                                <x-label for="nickname" :value="__('Nickname')" />
                                <x-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" required />
                            </div>

                            <!-- city -->
                            <div class="mt-4">
                                {{ trans('messages.ciudad') }}
                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                            </div>

                            <!-- fecha -->
                            <div class="mt-4">
                                {{ trans('messages.fecha') }}
                                <x-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha')" required />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                {{ trans('messages.contrasena') }}
                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="mt-4">
                                {{ trans('messages.contrasena2') }}
                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm " data-toggle="modal" data-target="#modalRegistro" href="#">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <x-button class="botonf ml-4">
                                    {{ trans('messages.regist') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Iniciar Sesión:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--INICIAR SESION-->
                    <div class="modal-body align-items-center justify-content-center">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="botonf ml-3">
                                {{ trans('messages.inicios') }}
                            </x-button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>