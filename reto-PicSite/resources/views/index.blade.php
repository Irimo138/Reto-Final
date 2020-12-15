<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PicSite</title>

    <!--Linkear los estilos de la página-->
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/estilos2.css">

    <!--Linkear los scipts de bootstrap-->
    <script src="../resources/js/jquery-3.4.1.min.js"></script>
    <script src="../resources/js/popper.min.js"></script>
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    
    <script>
        window.onload = openMidNav;

        function openMidNav() {
            if(window.screen >"577px"){
                document.getElementById("mySidenav").style.width = "25%";
            }
            else{
                closeNav();
            }
		}
		function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
            document.getElementById("page-content-wrapper").style.width = "0";
		}
		function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("page-content-wrapper").style.width = "100%";
		}
	</script>
</head>
<body id="wrapper">
    <aside id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn d-block d-sm-block d-md-none" onclick="closeNav()">&times;</a>
        <section class="row m-1">
            <img id="logo" class="mx-auto p-1" src="../resources/images/logo1.png">
            <h1 class="imagotipo mx-auto p-1">PicSite</h1>
            <hr class="mx-auto linea" ></li>
            <h3 class="imagotipo mx-auto">Un sitio de interés</h3>
        </section>

        <section class="contenidoAside">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>Cambiar idioma</b>
            </a>
            <div class="idiomaColor dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><img class="idiomas" src="../resources/images/banderaEsukadi.png">Esukera</a>
                <div class="idiomaColor dropdown-divider"></div>
                <a class="dropdown-item" href="#"><img class="idiomas" src="../resources/images/banderaIngles.png">English</a>
            </div>
            <h5>¿En que consiste PicSite?</h5>
            <div class="d-none d-sm-none d-md-block">
                <p class="texto p-3 text-dark">PicSite te ofrece la oportunidad de compartir dspots de fotografía. Disfruta del contenido y recuerda...<span class="colorpalabra"> This is the way</span></p>
            </div>
            <div class="d-block d-sm-block d-md-none">
                <p class="texto p-3 text-dark">PicSite tiene como finalidad compartir spots de fotografía y encontrar esos <span class="colorpalabra">lugares</span> escondidos que tanto nos gustan.<span class="colorpalabra p-0 m-0"> PicSite</span> te ofrece nuevos sitios para fotografiar y descubrir, pero ten en cuenta cuidarlos, está en nuestras manos mantenerlo todo como debe.</p>
                <a href=".Foo" class="btn btn-default colorpalabra" data-toggle="collapse">mostrar más...</a> 
                <hr  class="mx-auto linea">
                <div class="collapse Foo">  
                    <p class="texto p-3 text-dark"> En nuestra página podrás compartir lugares que te parezcan interesantes. Además, podrás comentar otros spots y compartir las <span class="colorpalabra">fotos</span> que hayas tomado en el lugar. Se respetuoso y disfruta. Y recuerda,<span class="colorpalabra"> este es el camino</span></p>
                </div> 
            </div>
        </section>
    </aside>
    <main id="page-content-wrapper">
        <article class="d-block d-sm-block d-md-none row m-1 container-fluid">
            <img id="logo" class="mx-auto p-1" src="../resources/images/logo1.png">
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
                            <img src="../resources/images/carreteran.jpg" class="d-block mx-auto imagenesCarrusel">
                            <div class="contenido2 carousel-caption d-none d-md-block">
                                <h2 class="colorTitulo">No compartas tu contraseña personal.</h2>
                                <p>Consejo del día.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../resources/images/microfono.jpg" class="d-block mx-auto imagenesCarrusel">
                            <div class=" contenido2 carousel-caption d-none d-md-block">
                              <h2 class="colorTitulo">Cuida el contenido que subes.</h2>
                              <p>Compartamos un sitio con seguridad y el fin de disfrutarlo.</p>                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../resources/images/tren.jpg" class="d-block mx-auto imagenesCarrusel">
                            <div class="contenido2 carousel-caption d-none d-md-block ">
                              <h2 class="colorTitulo">¿Buscando un spot para fotografiar?</h2>
                              <p>Disfruta de cada lugar que visites y no olvides cuidarlo.</p>                            </div>
                          </div>
                        </div>
                        <!-- Aquí se indican los botones para pasar de una imagen a otra, exactamente la anterior y la siguiente-->
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </section>
                <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center">
                    <img class="imagenSelec" src="../resources/images/ola.jpg">
                    <div class="contenido">
                        <a class= "redirigir" href="#"><h2 class="colorTitulo">Iniciar Sesión</h2></a>
                    </div>
                </section>
                <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                    <img class="imagenSelec" src="../resources/images/pared.jpg">
                    <div class="contenido">
                        <a class= "redirigir" href="#"><h2 class="colorTitulo">Entrar como invitado</h2></a>
                    </div>
                </section>
                <section class="seleccion caja col-12 col-md-4 p-0 m-0 text-center ">
                    <img class="imagenSelec" src="../resources/images/carretera.jpg">
                    <div class="contenido">
                        <a class= "redirigir" href="#"><h2 class="colorTitulo">Registrarse</h2></a>
                    </div>
                </section>
            </div>
        </article>
    </main>
    </section>
</body>
</html>