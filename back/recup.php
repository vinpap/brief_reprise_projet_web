<?php
require('bdd.php');
$req = $bdd->prepare('SELECT * from Avis');
$req->execute();
$datas= $req->fetchAll();

foreach($datas as $data){
    echo '<p>Pseudo: '.$data['pseudo'].'</p>';
    echo '<p>Message: '.$data['message'].'</p>';
    echo '<p>Heure: '.$data['heure'].'</p><br>';
}