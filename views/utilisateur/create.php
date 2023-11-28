<form action="?controller=utilisateur&function=insert" method="post">
     <label for="nom">
          Nom 
          <input type="text" id="nom" name="nom" minlength="2" maxlength="25" value="" required>
     </label>
     <label for="email">
          Nom d'utilisateur 
          <input type="email" id="email" name="email" maxlength="45" value="" required>
     </label>
     <label for="mot_de_passe">
          Mot de passe 
     <input type="password" id="mot_de_passe" name="mot_de_passe" minlength="6" maxlength="45" value="" required>
     </label>
     <label for="date_de_naissance">
          Date de naissance 
     <input type="text" id="date_de_naissance" name="date_de_naissance" maxlength="10" placeholder="aaaa-mm-jj" value="">
     </label>
     <br>
     <p><input type="submit" value="Soumettre"/></p>
</form>