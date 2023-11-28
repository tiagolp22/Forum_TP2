<h3>Mise à jour</h3>
<br>
<form action="?controller=forum&function=edit" method="post">
    <input  type="number" name="id_forum" value="<?php echo $data['utilisateur']['id_forum']; ?>">
        <label for="titre">
            Titre
            <input type="text" name="titre" value="<?php echo $data['utilisateur']['titre']; ?>">
        </label>
        <label>
            Nom de l'auteur
            <input type="text" name="id_utilisateur" value="<?php echo $data['utilisateur']['id_utilisateur']; ?>">
        </label>
        <label>
            Date de parution
            <input type="date" name="date" value="<?php echo date_format(date_create($data['utilisateur']['date']),"Y-m-d") ?>">
        </label>
        <br>
     <input type="submit" value="Soumettre">
</form>
 