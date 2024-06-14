@extends('layouts.user')
@section('title', 'Simple Google Maps Example')
@section('content')


<input id="search-box" type="text" style=" width: 300px;margin-top: 10px;padding: 5px;" placeholder="Search for a location">
<div id="map" style=" height: 500px;width: 100%;"></div>

<input id="latitude1" type="text" placeholder="Latitude 1" readonly>
<input id="longitude1" type="text" placeholder="Longitude 1" readonly>
<input id="latitude2" type="text" placeholder="Latitude 2" readonly>
<input id="longitude2" type="text" placeholder="Longitude 2" readonly>


    
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDddAMxFJaC_8y6EhQbspXC8ojAWUVs5cE&libraries=places&callback=initMap" async defer></script>

    
    <script>
        let map;
        let markers = [];
        let directionsService;
        let directionsRenderer;
        let clickCount = 0;
        let point1, point2;

        function initMap() {
            // Initialize the map centered at a specific location
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 24.740691, lng: 46.6528521 },
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Initialize the Directions service and renderer
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            // Create a search box and link it to the UI element
            const input = document.getElementById('search-box');
            const searchBox = new google.maps.places.SearchBox(input);

            // Bias the SearchBox results towards current map's viewport
            map.addListener('bounds_changed', () => {
                searchBox.setBounds(map.getBounds());
            });

            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place
            searchBox.addListener('places_changed', () => {
                const places = searchBox.getPlaces();

                if (places.length === 0) {
                    return;
                }

                // Clear out the old markers
                markers.forEach(marker => marker.setMap(null));
                markers = [];

                // For each place, get the icon, name, and location
                const bounds = new google.maps.LatLngBounds();
                places.forEach(place => {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    // Create a marker for each place
                    const marker = new google.maps.Marker({
                        map: map,
                        title: place.name,
                        position: place.geometry.location
                    });
                    markers.push(marker);

                    // Update the first set of latitude and longitude inputs
                    document.getElementById('latitude1').value = place.geometry.location.lat();
                    document.getElementById('longitude1').value = place.geometry.location.lng();

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });

            // Add a click event listener to the map
            map.addListener('click', (event) => {
                clickCount++;
                placeMarkerAndGetDirections(event.latLng, map);
            });
        }

        function placeMarkerAndGetDirections(latLng, map) {
            // Create a marker at the clicked location
            const marker = new google.maps.Marker({
                position: latLng,
                map: map
            });
            markers.push(marker);

            // Update the latitude and longitude inputs based on the click count
            if (clickCount === 1) {
                point1 = latLng;
                document.getElementById('latitude1').value = latLng.lat();
                document.getElementById('longitude1').value = latLng.lng();
            } else if (clickCount === 2) {
                point2 = latLng;
                document.getElementById('latitude2').value = latLng.lat();
                document.getElementById('longitude2').value = latLng.lng();
                
                // Get directions between the two points
                getDirections(point1, point2);

                // Reset click count
                clickCount = 0;
            }
        }

        function getDirections(point1, point2) {
            const request = {
                origin: point1,
                destination: point2,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, (result, status) => {
                if (status === 'OK') {
                    directionsRenderer.setDirections(result);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        function handleLocationError(browserHasGeolocation, pos) {
            console.log(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
        }
    </script>
@endsection



