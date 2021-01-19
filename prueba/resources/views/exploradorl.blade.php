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
                    <a href=""{{route('info', $spot)}}"" class="redirigir col-3 m-0 p-0 seleccion">
                        <img class="imagenSelec" src="{{asset($spot->url)}}">
                        <div class="contenido">
                            <h2>{{($spot->name)}}</h2>
                        </div>
                    </a>
                    @endforeach 
                    <a href="{{route('nuevoSpot')}}" class="redirigir col-3 m-0 p-0 seleccion">
                        <img class="imagenSelec" src="images/carretera2.jpg">
                        <div class="contenido">
                            <h2>Publicar un Spot</h2>
                        </div>
                    </a>         
                </div>
            </section>
           
        </main>
    </body>
</html>