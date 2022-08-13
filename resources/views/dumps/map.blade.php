@extends('layouts.app')
@section('content')
<!-- -17.775906446111378, -63.19563034843979 -->
<div class="container">
    <br>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h2>Basureros</h2>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div id="mapa" style="height: 500px ; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <br>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Facultad</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($dumps as $dump)
            <tr>
                <td>{{$dump->id}}</td>
                <td id="{{'lat'.$dump->id}}" valor="{{$dump->lat}}">{{$dump->lat}}</td>
                <td id="{{'long'.$dump->id}}" valor="{{$dump->long}}">{{$dump->long}}</td>
                <td>{{$dump->name}}</td>
                <td>{{$dump->dumpType->name}}</td>
                <td>{{$dump->faculty->name}}</td>
                <td>
                    <a href="#" type="submit" class="btn btn-warning" id="{{'dest'.$dump->id}}" >Destacar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$users->links()}}
</div>--}}
</div>
<script>
    function iniciarMap() {
        var latitud = -17.775906446111378;
        var londitud = -63.19563034843979;
        coordenadas = {
            lng: londitud,
            lat: latitud
        }
        generarMapa(coordenadas);
        
        function shearchLat(texto){
            const first = texto.search("-17");
            return texto.slice(first, first+17);
        }
        function shearchLong(texto){
            const first = texto.search("-63");
            return texto.slice(first, first+17);
        }
        
        function generarMapa(coordenadas) {
            var mapa = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 17,
                center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
            });
            const dumps = "{{$dumps}}";
            const lenght = "{{sizeof($dumps)}}";
            for (let index = 1; index <= lenght; index++) {
                const latElem = document.getElementById("lat"+index);
                const longElem = document.getElementById("long"+index);
                console.log(latElem.getAttribute("valor"));
                console.log(longElem.getAttribute("valor"));
                //console.log("lat: "+shearchLat(element)+" long: "+ shearchLong(element));
                new google.maps.Marker({
                position: {lat: parseFloat(latElem.getAttribute("valor")) ,lng: parseFloat(longElem.getAttribute("valor"))},
                map: mapa
                }); 
            }
        }

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
@endsection