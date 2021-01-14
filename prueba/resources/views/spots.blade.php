<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <title>Document</title>
    </head>
    <body>
        <h1>Spots</h1>
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
                <span>Latitud:</span>
                <input id="latitud" name="Titulo" type="text"/>
                <br>
                <span>Longitud:</span>
                <input id="longitud" name="Titulo" type="text"/>
                <br>
                <div id="mapid" style="width: 600px; height: 400px; position: relative;" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0">
                    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="leaflet-pane leaflet-tile-pane">
                        <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                            <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                            <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, -347px, 0px); opacity: 1;">
                            <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, -347px, 0px); opacity: 1;">
                            <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, 165px, 0px); opacity: 1;">
                            <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, 165px, 0px); opacity: 1;">
                            </div>
                        </div>
                        </div>
                        <div class="leaflet-pane leaflet-shadow-pane"></div>
                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                        <div class="leaflet-pane leaflet-marker-pane"></div>
                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                        <div class="leaflet-pane leaflet-popup-pane"></div>
                        <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1048050px, 697379px, 0px) scale(4096);"></div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                        <div class="leaflet-control-zoom leaflet-bar leaflet-control">
                            <a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a>
                            <a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a>
                        </div>
                        </div>
                        <div class="leaflet-top leaflet-right"></div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                        <div class="leaflet-control-attribution leaflet-control">
                            <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>
                        </div>
                        </div>
                    </div>
                </div>
                <br>
                <input id="crear" type="submit" value="Crear"/>
            </form>
        </fieldset>
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
        <script>
            var mymap = L.map('mapid').setView([51.505, -0.09], 13);
            
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(mymap);
            
            mymap.on('click', onMapClick);

            function onMapClick(e) {
                document.getElementById("latitud").value = e.latlng.lat;
                document.getElementById("longitud").value = e.latlng.lng;
                L.marker([e.latlng.lat, e.latlng.lng]).addTo(mymap);
            };
        </script>
    </body>
</html>