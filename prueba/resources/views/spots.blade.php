<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Spots</title>
        <style>
            *{
                background-color: pink;
                margin: 0;
                padding: 0 ;
            }
            h1{
                text-align: center;
            }
            section{
                margin: auto;
            }
            h3{
                width: 100%;
                background-color: rgb(217, 217, 210);
                border-radius: 2vw;
                text-align: center;
            }
            article{
                border: 1px solid black;
                padding: 1em;
                margin-top:30px;
                margin-bottom:30px;
                margin-left: 33%;
                margin-right: 33%;
                width: 33%;
                height: 33%;
            }
            input{
                padding-left: 1vw;
                padding-right: 1vw;
            }
            #borrar{
                background-color: rgb(230, 82, 82);
                color: white;
            }
            #crear{
                background-color: rgb(110, 212, 110);
                color: white;
            }
            .cajas{
                width: 20em;
                margin: auto;
                margin-top: 1em;
            }
            fieldset{
                padding: 0.5em;
                margin-top: 2vh;
            }
            
        </style>
    </head>
    <body>
    <h1>SPOTS</h1>
    <section>
        <article class="cajas">
            <h3>Crear nuevo spot</h3>
            
                <fieldset>
                    <legend>Spot</legend>
                    
                    <form method="POST" action="{{route("nuevoSpot")}}" enctype="multipart/form-data">
                        @csrf
                        <input name="titulo" type="text"/>
                        <input type="file" name="file" id="" accept="image/*">
                        <br>
                        @error('file')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <input name="descripcion" type="text">
                        <input name="latitud" type="text">
                        <input name="longitud" type="text">
                        <input id="crear" type="submit" value="Crear"/>
                    </form>
                 </fieldset>
        </article>
        <article class="cajas">
            <h3>Lista de tareas</h3>
            <fieldset>
                    <legend>Tareas</legend>
                    <table>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Titulo</b></td>
                        <td><b>Descripción</b></td>
                        <td><b>Latitud</b></td>
                        <td><b>Longitud</b></td>
                    </tr> 
                    @foreach($spot as $spot)
                    <tr>
                        <td>{{$spot->id_spot}}</td>
                        <td>{{$spot->titulo}}</td>
                        <td>{{$spot->descripcion}}</td>
                        <td>{{$spot->latitud}}</td>
                        <td>{{$spot->longitud}}</td>
                    </tr> 
                    @endforeach
                    </table>
                </fieldset>
        </article>
        
    </section>
    </body>
</html>