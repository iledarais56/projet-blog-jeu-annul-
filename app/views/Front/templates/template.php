<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/public/Front/css/style.css">
    <title>Blog-ludik</title>
</head>
<body>
    <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?action=categories">Les jeux</a></li>
                        <li><a href="index.php?action=top">Mes tops</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <p><a href="index.php">Blog-ludik</a></p>
        
    </header>
    <main>
        <div class="container">
            <?= $content ?>


        </div>
    </main>
    <footer>
        <div class="footer_top">
            <p> Tous droits reservés 2021 - MVC -Kercode </p>
            <a href="index.php?action=mentions">Mentions légales</a>
        </div>
        
    </footer>
</body>
</html>