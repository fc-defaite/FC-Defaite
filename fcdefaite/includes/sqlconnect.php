<?php
  $host_name = 'localhost';
  $database = 'fcdefaite';
  $user_name = 'root';
  $password = '';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $statement = $dbh->prepare("SET CHARACTER SET utf8");
    $statement->execute();
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }


  /**
   * Nettoie une valeur insérée dans une page HTML
   * Doit être utilisée à chaque insertion de données dynamique dans une page HTML
   * Permet d'éviter les problèmes d'exécution de code indésirable (XSS)
   * @param string $valeur Valeur à nettoyer
   * @return string Valeur nettoyée
   */
  function escape($valeur)
  {
      // Convertit les caractères spéciaux en entités HTML
      return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
  }

  ?>