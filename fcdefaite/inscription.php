<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            FC Défaite - Inscription
        </title>
        <meta charset="utf-8">
        <meta name="author" content="LIETARD Julien">
        <meta name="description" content="Site web personnel de Julien Lietard.">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <link rel="stylesheet" style="text/css" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
            require('includes/sqlconnect.php');
        ?>

        <!-- CSS -->

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    </head>
    <body>

        <header>
            <?php 
            include 'includes/menuhaut.php';
            ?>
        </header>
        <div id="formInCo">
            <?php
                include 'includes/menugauche.php';
            ?>
          <div id="corps">
            <?php
                include 'pages/inscription.php';
            ?>
          </div>
        </div>
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
</html>