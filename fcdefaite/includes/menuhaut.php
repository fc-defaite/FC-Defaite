<?php session_start();

    if (isset($_SESSION['idMember'])){
        $login=$_SESSION['idMember'];
        $firstName=$_SESSION['firstName'];
        $lastName=$_SESSION['lastName'];
        $photo=$_SESSION['photo'];
        $rang=$_SESSION['rang'];
        $pw=$_SESSION['pw'];
        $bio=$_SESSION['bio'];
      	$libRang=$_SESSION['libRang'];
      	$wallpaper=$_SESSION['desk'];
    } else {
        $login=null;
    }
?>
<div id="menuhaut">
    <div id="logo">
        <img src="img/logo.png" width=100px>
    </div>
    <a href="http://fcdefaite.fr"><button type="button" class="btn btn-light">ACCUEIL</button></a>
    <a href="membres.php"><button type="button" class="btn btn-light">MEMBRES</button></a>
  	<?php if ($login!=null){ 
  		echo '
    		<a href="galerie.php"><button type="button" class="btn btn-light">GALERIE</button></a>
            <div class="dropdown">
              <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                  JEUX
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="minecraft.php">MINECRAFT</a>
                <a class="dropdown-item" href="leagueoflegends.php">LEAGUE OF LEGENDS</a>
                <a class="dropdown-item" href="overwatch.php">OVERWATCH</a>
                <a class="dropdown-item" href="loltft.php">LOL TFT</a>
                <a class="dropdown-item" href="rsix.php">RAINBOW SIX</a>

              </div>
          	</div>
    		<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-light">MON PROFIL</button></a>';
    }
    ?>
</div>