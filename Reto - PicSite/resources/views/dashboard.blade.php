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
                <h3 class="imagotipo mx-auto">  Nombre de usuario</h3>
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
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                        <img class="imagenSelec" src="images/pared.jpg">
                        <div class="contenido">
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>Spot 1</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir" href="#"><h2>Spot 2</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>Spot 3</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                        <img class="imagenSelec" src="images/pared.jpg">
                        <div class="contenido">
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>Spot 4</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir" href="#"><h2>Spot 5</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>Spot 6</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                        <img class="imagenSelec" src="images/pared.jpg">
                        <div class="contenido">
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>Spot 7</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir" href="#"><h2>Spot 8</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>Spot 9</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                        <img class="imagenSelec" src="images/pared.jpg">
                        <div class="contenido">
                            <a class= "redirigir" data-toggle="modal" data-target="#modalSesion"><h2>Spot 10</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/ola.jpg">
                        <div class="contenido">
                            <a class= "redirigir" href="#"><h2>Spot 11</h2></a>
                        </div>
                    </section>
                    <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                        <img class="imagenSelec" src="images/carretera.jpg">
                        <div class="contenido">
                            <a class= "redirigir"  data-toggle="modal" data-target="#modalRegistro"><h2>Spot 12</h2></a>
                        </div>
                    </section>
                </div>
            </article>
        </main>
        </section>

    </body>
</html>