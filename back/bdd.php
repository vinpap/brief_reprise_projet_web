<?php
try {
    // Le fichier sql_ids.php n'est pas dans le Git, vous devez le créer dans le même dossier.
    // Ce fichier doit contenir votre id et votre mot de passe MySQL, dans des variables $id
    // et $password
    $bdd = new PDO("mysql:host=localhost;dbname=brief_reprise_web", "root", "");
} catch (\Exception $e) {
    die("Erreur:" . $e->getMessage());
}
?>