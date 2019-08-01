<?php 
	session_start(); //on démarre une session
    $ch='SELECT * FROM Member m INNER JOIN Rang r ON r.idRang=m.rang WHERE m.rang>0 ORDER BY m.rang DESC ;';
    $req=$dbh->query($ch);
    $res=$req->fetchAll();
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@</th>
      <th scope="col">Nom</th>
      <th scope="col">Rôle</th>
      <th scope="col">bio</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($res as $member){
    echo '<tr>
      <th scope="row"><img src="img/profiles/'.$member['photo'].' " width=50px height=50px> @'.$member['idMember'].'</th>
      <td>'.$member['firstName'].' '.$member['lastName'].'</td>
      <td>'.$member['libRang'].'</td>
      <td>'.$member['bio'].'</td>
    </tr>';
  } 
  ?>
  </tbody>
</table>
