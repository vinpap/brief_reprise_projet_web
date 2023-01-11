
    <link rel="stylesheet" href="/asset/css/avis.css">
<div class="horizontal_bar"></div>
    <div class = "container_avis">
    <h3>Les avis</h3>
    <div class="horizontal_bar"></div>

        <div class = "container_flex">
        <form class="formulaire" method="post">
            <div>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
            </div>
            <div>
                <input type="text" id="message" name="message" placeholder="Message ">
            </div>
            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>

    <div class = "vertical_bar">
    </div>

    <div class = "container_texte">
        <?php
        require('back/recup.php');?>
        
    </div>
    </div>
</div>