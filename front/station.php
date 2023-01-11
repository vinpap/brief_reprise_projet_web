

<link rel="stylesheet" href="/asset/css/station.css">
<div class = "container_station">

    <div id="map"  ></div>
    <div class = "info">
        <h3>Info Station</h3>
        <p>Nom station : <span id="name"></span></p>
        <p>État : <span id="status"></span></p>
        <p>Vélos dispos : <span id="bikes"></span></p>
        <p>Info Station : <span id="station_info"></span></p>
    </div>

</div>



<script type="text/javascript">
    var map = L.map('map').setView([45.761658, 4.835130], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var url = "https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=4ea101268c4a14e763d185db28b8964e40e462de"
    fetch(url)
    .then(function(response) {
      return response.json();
    }).then(function(json_content){
        
        var stations_list = [];
        var current_id = 0;
        for (station of json_content)
        {
            
            let current_station = {
                station_id: current_id,
                latitude: station.position.lat,
                longitude: station.position.lng,
                name: station.name,
                status: station.status,
                bikes: station.available_bikes,
                info: station.address
            };
            stations_list.push(current_station);
            var marker = new L.Marker([current_station.latitude, current_station.longitude]);
            marker.on('click', function() {
                document.getElementById("name").innerHTML = current_station.name;
                document.getElementById("status").innerHTML = current_station.status;
                document.getElementById("bikes").innerHTML = current_station.bikes;
                document.getElementById("station_info").innerHTML = current_station.info;
            });
            marker.addTo(map);

        } 

    })

</script>