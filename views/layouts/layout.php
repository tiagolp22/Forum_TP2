<?php
require_once('lib/checkSession.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='resources/css/style.css'/>
     <title>FORUM</title>
</head>
<body>

<header>
     <nav class="nav">
          <a href="?controller=forum&function=login">Se connecter</a>          
          <a href="?controller=forum&function=index">Lire les articles</a>
          <?php
                if ($_SESSION) {
                ?>
                    <li><a href="?controller=forum&function=create">Ajouter un article</a></li>
                <?php
                }?>
          <a href="?controller=utilisateur&function=create">Saisir un utilisateur</a>
          <a href="?controller=utilisateur&function=logout">Logout</a>
     </nav>
</header>

<main class="container">
    <?php echo $content; ?>
</main>

</body>
</html>
