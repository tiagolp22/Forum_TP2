<div>
    <table class="login">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Nom d'utilisateur</th>
                <th>Date de Naissance</th>
                <th>Éditer</th>
                <th>Effacer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo date_format(date_create($row['date_de_naissance']), "Y/m/d") ?></td>
                    <td><a href="?controller=utilisateur&function=view&id=<?php echo $row['id_utilisateur']; ?>">Éditer</a></td>
                    <td>
                        <form action="?controller=utilisateur&function=delete" method="post">
                            <input type="hidden" name="id_utilisateur" value="<?php echo $row['id_utilisateur'] ?>">
                            <input class="danger" type="submit" value="Effacer">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>