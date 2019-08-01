<?php
    require '../includes/sqlconnect.php';

	if ($_POST['pw']==$_POST['pwVerif']){

    //Hashage du mot de passe
    $mdpCrypte = password_hash($_POST['pw'],PASSWORD_DEFAULT);

    //Insertion dans la base de données
    $ch ='INSERT INTO Member (idMember, pw, firstName, lastName) 
            VALUES (:idMember, :pw, :firstName, :lastName)';
    $req= $dbh -> prepare($ch);

    $res = $req-> execute(array(

        'idMember'=> $_POST['idMember'],
        'pw'=> $mdpCrypte,
        'firstName'=> $_POST['firstName'],
        'lastName'=> $_POST['lastName']
      ));

      //Retour à la page d'accueil
      header('Location: ../index.php');

	} 
    else {
      $alertmdp=true;
      header('Location: ../inscription.php?error='.$alertmdp);      
    }
?>
