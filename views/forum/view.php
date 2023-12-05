<div class="data-forum">
    <h1>Éditer le commentaire</h1>

    <form action="index.php?controller=forum&function=update" method="post">
        <div class="forum-field">
            <label> Titre :
                <input name="titre" type="text" class="input-area" value="<?= $data['titre']; ?>">
            </label>
        </div>
        <div class="forum-field">
            <label> Texte :
                <textarea name="texte" maxlength="1000" class="textarea" rows="5" cols="100"><?= $data['texte']; ?></textarea>
            </label>
        </div>
        <div class="forum-field">
            <label> Date :
                <input name="date" type="date" class="area-date" disabled value="<?= $data['date']; ?>">
            </label>
        </div>

        <input name="id_forum" type="hidden" value="<?= $data['id_forum']; ?>">

        <div class="forum-field">
            <button type="submit" value="Mettre à jour" class="btn">Editer</button>
        </div>
    </form>
</div>