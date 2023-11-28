<form action="?controller=forum&function=insert" method="post">
     <label for="titre">
          Titre 
          <input type="text" id="titre" name="titre" minlength="5" maxlength="100" value="Entrez le titre de cet article">
     </label>
     <label for="texte">
          Texte de l'article 
          <textarea name="article" maxlength="1000" rows="5" cols="100"></textarea>
     </label>
     <label for="date">
          Date de publication 
          <input type="text" id="date" name="date" maxlength="10" placeholder="aaaa-mm-jj" value="">
     </label>
     <label for="id_utilisateur_forum">
          <input type="hidden" name="id_utilisateur_forum">
     </label>
     <br>
     
     <p><input type="submit" value="Soumettre"/></p>
</form>
