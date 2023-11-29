<h3>Mise à jour</h3>
<br>
<form action="index.php?controller=forum&function=edit" method="post">
    <input type="number" name="id_forum" value="<?php echo $data['utilisateur']['id_forum']; ?>">
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

<div class="data-article">

    <h1>Éditer l'article</h1>

    <form action="index.php?controller=article&function=editer" method="post">

        <div class="champ-article">
            <label> Titre :
                <input name="titre" type="text" class="input-area" value="<?= $data['titre']; ?>">
            </label>
        </div>
        <div class="champ-article">
            <label> Article :
                <textarea name="article" maxlength="1000" class="textarea" rows="5" cols="100"><?= $data['article']; ?></textarea>
            </label>
        </div>
        <div class="champ-article">
            <label> Date :
                <input name="date" type="date" class="areadate" value="<?= $data['date']; ?>">
            </label>
        </div>

        <input name="id" type="hidden" value="<?= $data['id']; ?>">

        <div class="champ">
            <input type="submit" value="Mettre à jour" class="btn">
        </div>
    </form>
</div>