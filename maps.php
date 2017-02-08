<?php require 'template/header.php' ?>

<div class="container">
    <h3 class="beautyText">Hitta oss</h3>
    <hr>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {lat: 57.720460, lng: 11.990351};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB97WIH1fs-mrs2HRhmXbbIVBlqv8toezM&callback=initMap">
    </script>
</div>
<?php require 'template/footer.php' ?>

