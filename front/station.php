
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
</script>