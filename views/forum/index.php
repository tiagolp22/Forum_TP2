<?php

require_once('lib/checkSession.php');

if ($_SESSION) {
?>
    <h1>Bonjour, <?= $_SESSION['nom'] ?></h1>
<?php
    error_log("Nome do caboco logado " . $_SESSION['nom']);
} else {
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
            <th>article</th>
            <th>Date de publication</th>
            <th>Éditer</th>
            <th>Effacer</th>
        </tr>
    </thead>
    <tbody>
        <?php

        if (isset($data) && is_array($data)) {
            foreach ($data as $row) {
        ?>
                <tr>
                    <td><?php echo $row['titre'] ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['texte'] ?></td>
                    <td><?php echo date_format(date_create($row['date']), "Y/m/d") ?></td>
                    <td>
                        <a href="?controller=forum&function=edit&id=<?php echo $row['id_forum']; ?>">Éditer</a>
                    </td>
                    <td>
                        <form action="?controller=forum&function=delete" method="post">
                            <input type="hidden" name="id_forum" value="<?= $row['id_forum'] ?>">
                            <input type="submit" value="Effacer">
                        </form>
                    </td>
                </tr>
        <?php
            }
        } else {

            echo "<tr><td colspan='5'>Connectez-vous pour créer et modifier le forum</td></tr>";
        }
        ?>
    </tbody>
</table>