<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='resources/css/style.css'/>
     <title>TP2</title>
</head>
<body>

<header>
     <nav class="nav">
          <a href="?controller=forum&function=login">Se connecter</a>          
          <a href="?controller=forum&function=index">Lire les articles</a>
          <a href="?controller=forum&function=create">Ajouter un article</a>
          <a href="?controller=utilisateur&function=index">Lister les utilisateurs</a>
          <a href="?controller=utilisateur&function=create">Saisir un utilisateur</a>
     </nav>
</header>

<main class="container">
    <?php echo $content; ?>
</main>

</body>
</html>
