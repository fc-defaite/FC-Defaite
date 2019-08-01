<form id="forminscription" action="posts/updateMember.php" method="post">

    <p class="btn btn-primary btn-lg btn-block">Modifier mon profil : </p>

    <div class="casef">
        <h5>@</h5><input name="idMember" class="form-control" value="<?php echo $login; ?>" type="text" required>
    </div>
    
    <div class="casef">
        <h5>PP</h5><input name="photo" class="form-control" value="<?php echo $photo; ?>" type="text" required>
    </div>

    <h5>bio :</h5><textarea id="bio" name="bio"><?php echo $bio; ?></textarea>
    <br/>
    <div class="casef">
        <h5>mdp</h5><input name="pw" class="form-control" value="<?php echo $pw; ?>" type="password" required>
    </div>
    

    <div class="casef">
        <h5 class="invisible">mdp</h5><input name="pwVerif" class="form-control" placeholder="Retapez le mot de passe" type="password" required>
    </div>

    

    <button type="submit" class="btn btn-success">Modifier mes informations</button>
    <br/><div class="alert alert-warning">
        <strong>Attention, </strong> Il faudra se Déconnecter / Reconnecter pour voir les modifications.
    </div>
</form>