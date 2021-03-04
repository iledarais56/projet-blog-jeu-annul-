<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/public/Back/css/style.css">
    <title>Tableau de bord</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="btnAdmin">
                <div class="backTdb">
                    <button><a href="indexAdmin.php?action=tdbAdmin">Retour au tableau de bord</a></button>
                </div>
                <br>
                <div class="deconTemp">
                    <button><a href="indexAdmin.php?action=deconnexion">Déconnexion</a></button>
                </div>
            </div>
        </div>

        <br>
        <?= $content ?>

    </div>
<script></script>    
</body>
</html>