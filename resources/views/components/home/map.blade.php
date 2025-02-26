<style>
    .attachment.attachment--preview img {
        vertical-align: middle;
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 15px;
    }
</style>
<div id="map" class="mymap py-5" style="background-color: #EEE;">
    <div class="container-fluid p-0 ">
        <div class="map-container ">
            <div id="map" class="w-100 h-100" style="border: 1px solid black;"></div>
        </div>
    </div>
</div>
@section('javascript')
    <script>
        $(document).ready(function() {
            let locations = @json($locations); // Convert PHP array to JavaScript
            const map = L.map('map').setView([24.473289480572074, 54.324058442330234], 12);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 30,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            locations.forEach(function(location) {
                L.marker([location.long, location.lat]).addTo(map)
                    .bindPopup(location.en_description)
                    .openPopup();
            });
        });
    </script>
@stop
