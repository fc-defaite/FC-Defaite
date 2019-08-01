<form id="formconnexion" action="posts/connectMember.php" method="post">

    <p class="btn btn-primary btn-lg btn-block">Formulaire de Connexion : </p>

    <div class="casef">
        <input name="idMember" class="form-control" placeholder="Identifiant" type="text" required>
    </div>

    <div class="casef">
        <input name="pw" class="form-control" placeholder="Mot de passe" type="password" required>
    </div>
    <br/>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="stayco">
            <label class="form-check-label" for="stayco" name="stayco">Se souvenir de moi ?</label>
        </div>
    <br/>
    <button type="submit" class="btn btn-success">Se connecter</button>
  
  <?php 
        $alertco=$_GET['error'];

        if ($alertco!=false){
            echo '
            <div class="alert alert-danger">
        <strong>ERREUR, </strong> Identifiant ou Mot de passe incorrect.
    </div>';
        }
    ?>
    
</form>