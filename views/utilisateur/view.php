<h3>Mise à jour</h3>
<br>
<form action="index.php?controller=utilisateur&function=edit" method="post">
    <input type="hidden" name="id_utilisateur" value="<?php echo $data['utilisateur']['id_utilisateur']; ?>">
    <label>
        Nom
        <input type="text" name="nom" value="<?php echo $data['utilisateur']['nom']; ?>">
    </label>
    <label>
        Email
        <input type="email" name="email" value="<?php echo $data['utilisateur']['email']; ?>">
    </label>
    <label>
        Date de naissance
        <input type="date" name="date_de_naissance" value="<?php echo date_format(date_create($data['utilisateur']['date_de_naissance']), "Y-m-d"); ?>">
    </label>
    <br>
    <input type="submit" value="Soumettre">
</form>

 