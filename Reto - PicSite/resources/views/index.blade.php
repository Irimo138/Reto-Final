<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PicSite</title>
        <!--Linkear los estilos de la página-->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/estilosIndex.css">
        <!--Linkear los scipts de bootstrap-->
        <script src="js/app.js"></script>
        <script src="../resources/js/jquery-3.4.1.min.js"></script>
        <script src="../resources/js/popper.min.js"></script>
        <script src="../resources/js/bootstrap.min.js"></script>
        <script src="../resources/js/bootstrap.bundle.min.js"></script>    
        <script>
            window.onload = openMidNav;
            function openMidNav(){
                if(window.screen >"577px"){
                    document.getElementById("mySidenav").style.width = "25%";
                }
                else{
                    closeNav();
                }
            }
            function openNav(){
                document.getElementById("mySidenav").style.width = "100%";
                document.getElementById("page-content-wrapper").style.width = "0";
            }
            function closeNav(){
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("page-content-wrapper").style.width = "100%";
            }
        </script>
    </head>
    <body id="wrapper">
        <aside id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn d-block d-sm-block d-md-none" onclick="closeNav()">&times;</a>
            <section class="row m-1">
                <img id="logo" class="mx-auto p-1" src="images/logo1.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea" ></li>
                <h3 class="imagotipo mx-auto">Un sitio de interés</h3>
            </section>
            <section class="contenidoAside">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Cambiar idioma</b>
                </a>
                <ul>
                    <li><a href="{{ url('locale/en','en') }}">EN</a></li>
                    <li><a href="{{ url('locale/es','es') }}">ES</a></li>
                    <li><a href="{{ url('locale/eus','eus') }}">EUS</a></li>
                </ul>
                {{trans('messages.prueba')}}
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><img class="idiomas" src="images/banderaEsukadi.png">Euskera</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><img class="idiomas" src="images/banderaIngles.png">English</a>
                </div>
                <h5>¿En que consiste PicSite?</h5>
                <div class="d-none d-sm-none d-md-block">
                    <p class="texto p-3 text-dark">PicSite tiene como finalidad compartir spots de fotografía y encontrar esos lugares escondidos que tanto nos gustan.
                        La comunidad de PicSite te ofrece nuevos rincones para fotografiar y descubrir. Cuídalos, está en nuestras manos preservar estos lugares.</p>
                </div>
                <div class="d-block d-sm-block d-md-none">
                    <p class="texto p-3 text-dark">
                        PicSite tiene como finalidad compartir spots de fotografía y encontrar esos lugares escondidos que tanto nos gustan.
                        La comunidad de PicSite te ofrece nuevos rincones para fotografiar y descubrir. Cuídalos, está en nuestras manos preservar estos lugares.</p>
                    <a href=".Foo" class="btn btn-default colorpalabra" data-toggle="collapse">mostrar más...</a> 
                    <hr  class="mx-auto linea">
                    <div class="collapse Foo">  
                        <p class="texto p-3 text-dark">
                            En nuestra página podrás compartir lugares que te parezcan interesantes.
                            Además, podrás comentar otros spots y compartir las fotos que hayas tomado en el lugar. Se respetuoso y disfruta.</p>
                    </div> 
                </div>
            </section>
        </aside>
        <main id="page-content-wrapper">
            <article class="d-block d-sm-block d-md-none row m-1 container-fluid">
                <img id="logo" class="mx-auto p-1" src="images/logo1.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea" ></li>
                <h3 class="imagotipo mx-auto">Un sitio de interés</h3>
                <button onclick="openNav()">mostrar</button>
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
                                        <h2 class="colorTitulo">No compartas tu contraseña personal.</h2>
                                        <p>Consejo del día.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/microfono.jpg" class="d-block mx-auto imagenesCarrusel">
                                    <div class=" contenido2 carousel-caption d-none d-md-block">
                                        <h2 class="colorTitulo">Cuida el contenido que subes.</h2>
                                        <p>Compartamos un sitio con seguridad y el fin de disfrutarlo.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/tren.jpg" class="d-block mx-auto imagenesCarrusel">
                                    <div class="contenido2 carousel-caption d-none d-md-block ">
                                        <h2 class="colorTitulo">¿Buscando un spot para fotografiar?</h2>
                                        <p>Disfruta de cada lugar que visites y no olvides cuidarlo.</p>
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
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>Iniciar Sesión</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir" href="#"><h2>Entrar como invitado</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>Registrarse</h2></a>
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
                    <div class="modal-body align-items-center justify-content-center">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                            Nombre:<br>
                            <input type="text" class="form-control" name="" placeholder="Ej.: Juan">
                                <br>Apellido:<br>
                            <input type="text" class="form-control" name="" placeholder="Ej.: Rodriguez">
                                <br>Fecha Nacimiento:<br>
                            <input type="date" class="form-control" name="" placeholder="Ej.: 22/10/2000">
                                <br>Ciudad:<br>
                            <input type="text" class="form-control" name="" placeholder="Ej.: Barcelona">
                                <br>Correo electrónico:<br>
                            <input type="text" class="form-control" name="" placeholder="ejemplo@gmail.com">
                                <br>Nombre de Usuario:<br>
                            <input type="text" class="form-control" name="" placeholder="Ej.: Juan_Rodri96">
                                <br>Contraseña:<br>
                            <input type="password" class="form-control" name="" placeholder="Contraseña">
                                <br>Repetir Contraseña:<br>
                            <input type="password" class="form-control" name="" placeholder="Repetir contraseña">
                            <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
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
                    <div class="modal-body align-items-center justify-content-center">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <br>Nombre de Usuario:<br>
                            <input type="text" class="form-control" name="" placeholder="Ej.: Juan_Rodri96">
                                <br>Contraseña:<br>
                            <input type="password" class="form-control" name="" placeholder="Contraseña">
                            <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>