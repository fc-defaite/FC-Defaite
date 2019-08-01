<?php
if ($login!=null){
    $nbPw=strlen($pw);
}

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    </div>
                <div class="modal-body">
                    <center>
                    <?php
                     echo '<img src="img/profiles/'.$photo.'" name="aboutme" width="200" height="200" border="0" class="img-circle"></a>';
                     ?>
                    <h3 class="media-heading">
                    <?php
                        echo '@'.$login;  
                        ?>
                        <span class="label label-info">
                        </span>
                    </h3>
                    <span><strong>Nom : </strong></span>
                        <span class="label label-warning">
                            <?php
                                echo $firstName;
                            ?>
                        </span>
                        <span class="label label-info">
                            <?php
                                echo $lastName;
                            ?>
                        </span>
                        <br/>
                        <span><strong>Rôle : </strong></span>
                        <span class="label label-warning">
                            <?php
                                echo $libRang;
                            ?>
                        </span>

                        <br/>
                        <span><strong>url PP : </strong></span>
                        <span class="label label-warning">
                            <?php
                                echo $photo;
                                ?>
                                <span class="label label-info">
                        </span>

                        <br/>
                        <span><strong>Mot de passe : </strong></span>
                        <span class="label label-warning">
                            <?php
                                for ($i=0; $i<$nbPw; $i++) {
                                    echo '*';
                                }
                            ?>
                        </span>
                        
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio : </strong><br>
                        <?php echo $bio; ?>
                    </p>
                    <br>
                    </center>
                </div>
                <a href="modifmyself.php"<button type="button" class="btn btn-link">Modifier mon profil</button></a>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Retour</button>
                    </center>
                </div>
            </div>
        </div>