
<link rel="stylesheet" href="/asset/css/station.css">
<div class = "container_station"> 
    <div id="map"></div>   
    <div class = "info">
        <h3>Info Station</h3>
        <p>Nom station :</p>
        <p>État :</p>
        <p>Vélos dispos :</p>
        <p>Info Station :</p>
    </div>
</div>

<script type="text/javascript">
    var map = L.map('map').setView([45.761658, 4.835130], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Récupérer une liste de toutes les stations dispo
    // Parcourir la liste et afficher un marqueur aux coordonnées de chaque station
    var url = "https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=4ea101268c4a14e763d185db28b8964e40e462de"
    fetch(url)
    .then(function(response) {
      return response.json();
    }).then(function(json_response){

        for (let i = 0; i < json_response.length; i++){
            latitude = json_response[i]["position"]["latitude"];
            longitude = json_response[i]["position"]["longitude"];
            var marker = new L.Marker([45.761658, 4.835130]);
            marker.addTo(map);
        }

    })

    /*var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", "https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=4ea101268c4a14e763d185db28b8964e40e462de", false );
    xmlHttp.send( null );*/
    




</script>