<?php
    if(!empty($_POST['pseudo']) && !empty($_POST['message'])){
        require('bdd.php');
        $req = $bdd->prepare('INSERT INTO avis(pseudo, msg, heure) VALUES(:pseudo, :msg, :heure)');
        $req->execute([
            'pseudo'=>$_POST['pseudo'],
            'msg'=>$_POST['message'],
            'heure'=>date('y/m/d H:i:s')
        ]);
        include('main.php');
    }else{
        echo 'Veuillez renseigner tous les champs!';
    }
?>