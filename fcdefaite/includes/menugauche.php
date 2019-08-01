<div id="menugauche">
<?php if ($login==null){
    echo'<a href="connexion.php"><button type="button" class="btn btn-dark">Se connecter</button></a>';
    echo '<a href="inscription.php"><button type="button" class="btn btn-dark">S\'inscrire</button></a>';
} else {
    echo '<div id=informationsp>';
    echo '<img src="img/profiles/'.$photo.'">';
    echo '<h4>'.$firstName.' '.$lastName.'</h4>';
    echo '<p>@'.$login.'</p>';
    echo '</div>';
    echo'<a href="deconnexion.php"><button type="button" class="btn btn-secondary">Se déconnecter</button></a>';
}
?>
<p id="tousdroits">Tous droits réservés © - designed by Julien Lietard® - 2019</p>
</div>