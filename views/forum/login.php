<?php

$msg= null;
if(isset($_GET['msg'])){
    if($_GET['msg']== 1){
        $msg = "Verifier le nom de l'utilisateur";
    }elseif($_GET['msg']== 2){
        $msg = "Verifier le mot de passe";
    }
}

?>

<h3>Se connecter</h3>
<br>
<form action="?controller=forum&function=connect" method="post">
    
    <label for="email">
        Nom d'utilisateur
        <input type="text" name="email">
    </label>
    <label>
        Mot de passe
        <input type="text" name="mot_de_passe">
    </label>
        <br>
    <input type="submit" value="Soumettre">
</form>   