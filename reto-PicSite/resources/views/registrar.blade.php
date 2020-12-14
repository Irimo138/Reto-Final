<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PicSite</title>

        <!--Linkear los estilos de la página-->
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="../resources/css/estilos.css">

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
                <hr class="mx-auto linea"></li>
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
        <main class="row" id="page-content-wrapper">
            <section class="col-4"></section>
            <section class="col-4">    
                <h1>Registro:</h1>
                <form>
                    Nombre:<br>
                    <input type="text" name="" placeholder="Ej.: Juan">
                        <br>Apellido:<br>
                    <input type="text" name="" placeholder="Ej.: Rodriguez">
                        <br>Fecha Nacimiento:<br>
                    <input type="date" name="" placeholder="Ej.: 22/10/2000">
                        <br>Ciudad:<br>
                    <input type="text" name="" placeholder="Ej.: Barcelona">
                        <br>Correo electrónico:<br>
                    <input type="text" name="" placeholder="ejemplo@gmail.com">
                        <br>Contraseña:<br>
                    <input type="password" name="" placeholder="Contraseña">
                        <br>Repetir Contraseña:<br>
                    <input type="password" name="" placeholder="Repetir contraseña"><br><br>
                    <input type="submit" value="Registrarse" name="">
                </form>
            </section>
        </main>
    </body>
</html>