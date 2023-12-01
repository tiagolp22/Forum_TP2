<h3>Mise à jour</h3>

<form action="index.php?controller=forum&function=edit" method="post">
    
        <label>Titre:
            <input type="text" name="titre" value="<?php echo $data['titre']; ?>">
        </label>

        <label> Article:
            <textarea name="texte" maxlength="1000" class="textarea" rows="5" cols="100"><?= $data['texte']; ?></textarea>
        </label>

        <label>Date:
            <input type="date" name="date" value="<?php echo $data['id_forum']; ?>">
        </label>
    <input type="submit" value="Soumettre">
</form>