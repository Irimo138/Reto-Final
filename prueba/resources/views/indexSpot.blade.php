<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spots creados</title>
</head>
<body>
<h3>Lista de los spots existentes</h3>
            <fieldset>
                    <legend>Spots</legend>
                    <table>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Titulo</b></td>
                        <td><b>Descripción</b></td>
                        <td><b>Latitud</b></td>
                        <td><b>Longitud</b></td>
                        
                    </tr> 
                    @foreach($spots as $spots)
                    <tr>
                        <td>{{$spots->id_spot}}</td>
                        <td>{{$spots->Titulo}}</td>
                        <td>{{$spots->Descripción}}</td>
                        <td>{{$spots->Latitud}}</td>
                        <td>{{$spots->Longitud}}</td>
                        
                    </tr> 
                    @endforeach
                    </table>
                </fieldset>
</body>
</html>