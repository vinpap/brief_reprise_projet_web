<?php
require('bdd.php');
$req = $bdd->prepare('SELECT * from Avis');
$req->execute();
$datas= $req->fetchAll();

foreach($datas as $data){
?>
<div class = "text"><span class="pseudo_text"> <?php echo $data['pseudo']; ?> </span>
<?php echo $data['message']; ?> 
</div>

    <?php
}
?>