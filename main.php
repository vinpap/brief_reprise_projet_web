<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/asset/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="/asset/font/Comfortaa-VariableFont_wght.ttf">
    <link rel="stylesheet" href="/asset/font/Rounded_Elegance.ttf">

    <title>BE Vélo</title>
</head>
<body>
    <header>
    <?php include 'front/header.php';?>
    </header>
    <?php
    $actual_link = "$_SERVER[REQUEST_URI]";
    if (str_contains($actual_link, 'station')){
        include 'front/station.php';
        ?><style type="text/css"> .b_station button{ background-color: #D7B377; color: #2B4162} </style><?php
    } elseif (str_contains($actual_link, 'avis')) {
        include 'front/avis.php';
        ?><style type="text/css"> .b_avis button{ background-color: #D7B377; color: #2B4162} </style><?php
    } elseif (str_contains($actual_link, 'contact')) {
        include 'front/contact.php';
        ?><style type="text/css"> .b_contact button{ background-color: #D7B377; color: #2B4162} </style><?php
    } else {
        include 'front/accueil.php';
        ?><style type="text/css"> .b_accueil button{ background-color: #D7B377; color: #2B4162} </style><?php

    }
    ?>
     <footer>
    <?php include 'front/footer.php';?>
</footer>



</body>
</html>