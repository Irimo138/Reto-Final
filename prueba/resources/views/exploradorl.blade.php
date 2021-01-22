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

        <!--Script para introducir el pluggin de verificacion de eliminar-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>    
        @if (session('eliminado')== 'ok')
            <script>
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            </script>
        @endif

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

            /* Script para la confirmación de eliminación*/
            boton = document.getElementById("boton-eliminar");
            boton.submit(function(e)){
                e.preventDefault();
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    
                }
                })
            }
            
        </script>
    </head>
    <body id="wrapper">
    <aside id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn d-block d-sm-none d-md-none" onclick="closeNav()">&times;</a>
            <div class="row">
                <img class="col-3 ml-auto p-3" id="logo" src="images/logo1.png">
                <h1 class="col-7 mx-auto p-3">PicSite</h1>
            </div>
            <hr class="linea mx-auto">
            <div class="row">
                <h5 class="mx-auto">{{trans('messages.bienvenido')}}</h5>
            </div>
            <div class="row">
                <a href="https://localhost/Reto-Final/prueba/public/spot" class="btn btn-secondary mx-auto">{{trans('messages.nuevospot')}}</a><br>
            </div>
            <br>
            <div class="row">
                <div class="btn-group mx-auto">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">Ordenar por:</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Más Antiguos</a>
                        <a class="dropdown-item" href="#">Más Recientes</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="#">Montaña</a>
                        <a class="dropdown-item" href="#">Animales</a>
                        <a class="dropdown-item" href="#">Lugares Abandonados</a>
                    </div>
                </div>
            </div>
            <div class="contenidoAside" style="height: 20vh">
                <a><b>{{ trans('messages.idioma') }}</b></a>
                <ul>
                    <li><a href="{{ url('lang', ['en']) }}"><img class="idiomaBandera" src="images/banderaIngles.png"></a></li>
                    <li><a href="{{ url('lang', ['es']) }}"><img class="idiomaBandera" src="images/banderaCastellano.jpg"></a></li>
                    <li><a href="{{ url('lang', ['eus']) }}"><img class="idiomaBandera" src="images/banderaEsukadi.png"></a></li>
                </ul>
            </div>
        </aside>
        <main id="page-content-wrapper">
            <section id="cabeza" class="d-block d-xs-block d-sm-none row m-1 container-fluid">
                <img id="logo" class="mx-auto p-1" src="images/logo12.png">
                <h1 class="imagotipo mx-auto p-1">PicSite</h1>
                <hr class="mx-auto linea" ></li>
                <h3 class="imagotipo mx-auto">{{ trans('messages.logo') }}</h3>
                <span class="d-block d-sm-block d-md-none" id="boton" onclick="openNav()">&#9776;</span>
            </section>

            <section class="container">
                <div class="row">
                    @foreach($spots as $spot)
                    <a href="{{route('info', $spot)}}" class="redirigir col-3 m-0 p-0 seleccion">
                        <img class="imagenSelec" src="{{asset($spot->url)}}">
                        <div class="contenido">
                            <h2>{{($spot->name)}}</h2>
                        </div>
                    </a>
                    @endforeach        
                </div>
            </section>
           
        </main>
    </body>
</html>