
<?php

$msg = null;
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $msg = "Verifier le nom de l'utilisateur";
    } elseif ($_GET['msg'] == 2) {
        $msg = "Verifier le mot de passe";
    }
}

?>

    <div class="login">
        <div>
            <form action="?controller=forum&function=connect" class="login" method="post">

                <label for="email">
                    Nom d'utilisateur
                    <input type="text" name="email" placeholder="Nom d'utilisateur" />
                </label>
                <label>
                    Mot de passe
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>
                </label>
                <br>
                <input type="submit" class="bouton">Se connecter</input>
                <p class="message">Nouvelle utilisateur ? <a href="?controller=utilisateur&function=create">Se créer un compte</a></p>
            </form>
        </div>
    </div>
