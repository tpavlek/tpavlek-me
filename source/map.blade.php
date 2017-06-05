@extends('_layouts.wrapped')

@section('content')

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        #map_canvas {
            height: 400px;
            width: 100%;
        }
    </style>

    <div id="map_canvas"></div>
    <script>

        function initialize() {

            console.log("initializing");
            var json = $.getJSON("/collector_roads.geojson")
                .done(function (data) {
                    console.log("parsing done");
                    var map = new google.maps.Map(
                        document.getElementById("map_canvas"), {
                            center: new google.maps.LatLng(53.5557956, -113.6340295),
                            zoom: 14,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        });
                    map.data.addGeoJson(data);
                    map.data.setStyle({
                        strokeColor: "blue"
                    })
                });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnCMcx-I7Fp0opTGprFIt9mI4Zu9zZTb0&callback=initialize">
    </script>
@stop
