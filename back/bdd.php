<?php
try {
    // Le fichier sql_ids.php n'est pas dans le Git, vous devez le créer dans le même dossier.
    // Ce fichier doit contenir votre id et votre mot de passe MySQL, dans des variables $id
    // et $password
    require("sql_ids.php");
    $bdd = new PDO("mysql:host=localhost;dbname=web_dev", $id, $password);
} catch (\Exception $e) {
    die("Erreur:" . $e->getMessage());
}
?>