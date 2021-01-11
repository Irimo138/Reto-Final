<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Spots</h1>
    <form>
    <h3>Crear nuevos spots</h3>
            
            <fieldset>
                <legend>Nuevo spot</legend>
                
                <form method="POST" action="{{route("crear")}}">
                    @csrf
                    <span>Titulo:</span>
                    <input name="Titulo" type="text"/>
                    <br>
                    <span>Descripcion:</span>
                    <input name="Titulo" type="text"/>
                    <br>
                    <span>Laitud:</span>
                    <input name="Titulo" type="text"/>
                    <br>
                    <span>Longitud:</span>
                    <input name="Titulo" type="text"/>
                    <br>
                    
                    <input id="crear" type="submit" value="Crear"/>
                </form>
             </fieldset>
    </form>
    <h3>Lista de los spots existentes</h3>
            <fieldset>
                    <legend>Spots</legend>
                    <table>
                        @foreach($spots as $task)
                        <tr>
                            <td>{{$task->titulo}}</td>
                            <td>{{$task->descripcion}}</td>
                        </tr> 
                        @endforeach
                    </table>
                </fieldset>
</body>
</html>