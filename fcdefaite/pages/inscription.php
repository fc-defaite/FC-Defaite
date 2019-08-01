<form id="forminscription" action="posts/createMember.php" method="post">

    <p class="btn btn-primary btn-lg btn-block">Formulaire d'Inscription : </p>

    <div class="casef">
        <h5>@</h5><input name="idMember" class="form-control" placeholder="Identifiant" type="text" required>
    </div>

    <div class="casef">
        <h5 class="invisible">@</h5><input name="firstName" class="form-control" placeholder="Prénom" type="text" required>
    </div>

    <div class="casef">
        <h5 class="invisible">@</h5><input name="lastName" class="form-control" placeholder="Nom de famille" type="text" required>
    </div>

    <div class="casef">
        <h5 class="invisible">@</h5><input name="pw" class="form-control" placeholder="Mot de passe" type="password" required>
    </div>
    
    <div class="casef">
        <h5 class="invisible">@</h5><input name="pwVerif" class="form-control" placeholder="Retapez le mot de passe" type="password" required>
    </div>

    <?php 
        $alertmdp=$_GET['error'];

        if ($alertmdp!=false){
            echo '
            <div class="alert alert-danger">
        <strong>ERREUR, </strong> Les mots de passe doivent être identiques.
    </div>';
        }
    ?>

    <button type="submit" class="btn btn-success">S'inscrire</button>
</form>
