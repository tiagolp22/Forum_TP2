<?php
require('lib/checkSession.php');
require('lib/connex.php');

$sql = "SELECT id_forum, titre, date, texte, id_utilisateur_forum, nom 
        FROM forum
        INNER JOIN utilisateur ON id_utilisateur = id_utilisateur_forum 
        ORDER BY date DESC LIMIT 5;";

$result = mysqli_query($con, $sql);

?>

<?php if ($_SESSION) : ?>
    <h2>Bonjour, <?= $_SESSION['nom']; ?></h2>
<?php else : ?>
    <h3>Les derniers commentaires</h3>
<?php endif; ?>

<?php foreach ($result as $row) : ?>
    <div class="form">
        <label class="nom">Nom: <?= $row['nom']; ?></label>
        <label class="titre">Titre: <?= $row['titre']; ?></label>
        <label class="texte" type="text" maxlength="1000" rows="5" cols="100"><?= $row['texte']; ?></label>
        <label class="date">Date: <?= $row['date']; ?></label>

        <?php if ($_SESSION) : ?>
            <div class="bnt-formt">
                <?php if ($_SESSION['id'] == $row['id_utilisateur_forum']) : ?>
                    <a href="index.php?controller=forum&function=edit&id_forum=<?= $row['id_forum']; ?>">
                        <button type="submit">Éditer</button></a>
                    <a href="index.php?controller=forum&function=delete&id_forum=<?= $row['id_forum']; ?>">
                        <button class="danger" type="submit">Effacer</button></a>
                <?php else : ?>

                    <button type="submit" disabled>Éditer</button>
                    <button class="danger" type="submit" disabled>Effacer</button>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <label>Connectez-vous pour modifier et supprimer des messages</label>
        <?php endif; ?>
    </div>
<?php endforeach; ?>