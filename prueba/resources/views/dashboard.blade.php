<html lang="en"><head>
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
                document.getElementById("mySidenav").style.display = "block";
                document.getElementById("page-content-wrapper").style.marginLeft = "25%";
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("page-content-wrapper").style.marginLeft= "0";
            }
        </script>
    </head>
    <body id="wrapper">
        <aside id="mySidenav" class="sidenav" style="width: 25%;">
            <a href="javascript:void(0)" class="closebtn d-block d-sm-none d-md-none" onclick="closeNav()">×</a>
            <section class="row m-1">
                <img id="logo" class="mx-auto p-1 mt-4" src="images/logo1.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea">
                <h3 class="imagotipo mx-auto">Un sitio de interés</h3>
            </section>
            <section class="contenidoAside">
                <a href="https://localhost/Reto-Final/prueba/public/spot" class="btn btn-secondary">Nuevo Spot</a><br>
                <a><b>Cambiar el idioma</b></a>
                <ul>
                    <li><a href="https://localhost/Reto-Final/prueba/public/lang/en"><img class="idiomaBandera" src="images/banderaIngles.png"></a></li>
                    <li><a href="https://localhost/Reto-Final/prueba/public/lang/es"><img class="idiomaBandera" src="images/banderaCastellano.jpg"></a></li>
                    <li><a href="https://localhost/Reto-Final/prueba/public/lang/eus"><img class="idiomaBandera" src="images/banderaEsukadi.png"></a></li>
                </ul>
            </section>
        </aside>
        <main id="page-content-wrapper">
            <div class="row">
            <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
                <section class="seleccion caja col-lg-4 col-md-6 col-sm-12 p-0 m-0 text-center">
                    <img class="imagenSelec" src="images/pared.jpg">
                    <div class="contenido">
                        <a class="redirigir" data-toggle="modal" data-target="#modalSesion"><h4>Nombre del Lugar</h4></a>
                    </div>
                </section>
            </div>
        </main>
    
</body></html>