<?php
    session_start(); //on démarre une session
    require '../includes/sqlconnect.php';
    if ( isset($_POST['idMember']) && isset($_POST['pw'])) {

        // récupération des données saisies dans le formulaire
		$idMember = $_POST['idMember'];
        $pw = $_POST['pw'];
        
        // écrire la requête préparée qui permet de récupérer l'utilisateur ayant le pseudo et le pass correspondant aux saisies
		$req = $dbh -> prepare('SELECT * FROM Member m INNER JOIN Rang r ON r.idRang=m.rang WHERE m.idMember = :idMember');
		$res=$req->execute(array(
            'idMember' => $idMember
        ));

        $res=$req->fetch();

		// on teste si $res contient un utilisateur
		if ($res) { // @ pseudo est unique donc au maximim un résultat possible ou 0
            //Comparaison des 2 mots de passes
            $mdpCrypte = password_verify($pw,$res['pw']);

            //Entrée : les mots de passes correspondent
            if($mdpCrypte){ // l'utilisateur existe dans la table
				$_SESSION['idMember']=$res['idMember'];
				$_SESSION['firstName']=$res['firstName'];
				$_SESSION['pw']=$pw;
				$_SESSION['lastName']=$res['lastName'];
                $_SESSION['photo']=$res['photo'];
                $_SESSION['rang']=$res['rang'];
                $_SESSION['bio']=$res['bio'];
              	$_SESSION['libRang']=$res['libRang'];
              	$_SESSION['desk']=$res['desk'];
              
                // se souvenir de moi avec les cookies
                if(isset($_POST['stayco'])) {
                    setcookie("cookname", sha1($_SESSION['Auth']['idMember'] . uniqid() . $_SERVER['REMOTE_ADDR']), time() + 3600 * 24 * 3, "/", '', false, true);
                } 
              
                // supprimer cookies
                else { 
                    setcookie("cookname", sha1($_SESSION['Auth']['idMember'] . uniqid() . $_SERVER['REMOTE_ADDR']), time() - 3600 * 24 * 3, "/", '', false, true);
                    unset($_COOKIE['cookname']);
                }
              
				header('Location: ../index.php');
              
            } else {
                $alertco=true;
                header('Location: ../connexion.php?error='.$alertco);
            }
            }
        }
        
    
?>