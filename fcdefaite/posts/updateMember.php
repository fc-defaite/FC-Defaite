<?php
    require '../includes/sqlconnect.php';

    //Hashage du mot de passe
    $mdpCrypte = password_hash($_POST['pw'],PASSWORD_DEFAULT);

    //Update dans la base de données
	$ch ='UPDATE Member SET photo = :photo, bio = :bio, pw = :pw WHERE idMember = '.$login;
    $req= $dbh -> prepare($ch);

    $res = $req-> execute(array(
        'photo'=> $_POST['photo'],
        'bio'=> $_POST['bio'],
        'pw'=> $mdpCrypte
      ));

      //Retour à la page d'accueil
      header('Location: ../index.php');
?>
