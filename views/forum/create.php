<?php
require_once('lib/checkSession.php');

if (!$_SESSION) {
     header("Location: ?controller=forum&function=login");
     exit();
}

?>

<form action="?controller=forum&function=insert" method="post">
     <label for="titre">
          Titre
          <input type="text" name="titre" minlength="5" maxlength="100" value="Entrez le titre de cet article">
     </label>
     <label for="texte">
          Texte de l'article
          <textarea name="texte" maxlength="1000" rows="5" cols="100"></textarea>
     </label>
     <label for="date">
          Date de publication
          <input type="date" name="date" maxlength="10" placeholder="aaaa-mm-jj" value="">
     </label>
     <input type="hidden" name="id_utilisateur_forum" value=<?= $_SESSION['id'] ?> />
     <br>
     <p><input type="submit" value="Soumettre" /></p>
</form>