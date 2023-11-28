<?php

require_once('lib/checkSession.php');
if($_SESSION){
  ?>
  <h1>Bonjour, <?= $_SESSION['nom'] ?></h1>
<?php

error_log(" nome do cab^oco logado " .$_SESSION['nom']);
} else{

  ?>
  <h1>Bonjour</h1>
<?php


}

?>



<table>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Nom de l'auteur</th>
      <th>Date de publication</th>
      
      <th>Éditer</th>
      <th>Effacer</th>
    </tr>
  <thead>
  <tbody>
  <?php foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['titre'] ?></td>
      <td><?php echo $row['nom'] ?></td>
      <td><?php echo date_format(date_create($row['date']),"Y/m/d") ?></td>
            
      <td>
        <a href="?module=forum&action=view&id=<?php echo $row['id_utilisateur']; ?>">Éditer</a>
      </td>
      <td>
        <form action="?module=forum&action=delete" method="post">
          <input type="hidden" name="id_utilisateur" value="<?= $row['id_utilisateur'] ?>">
      
        <input type="submit" Value="Effacer">
        </form>
      </td>
    </tr>
  <?php } ?>
  <tbody>
</table>