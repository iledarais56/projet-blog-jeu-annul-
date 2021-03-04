<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1 align="center">Connexion Administrateur</h1>
    <div id="inscription">
        <div align="center">
            <form action="indexAdmin.php?action=connexionAdmin"method="post">
                <table>
                     <!-- <tr>
                        <td align="right"><label for="firstname">Prénom:</label></td>
                        <td><input type="text" placeholder="votre prénom" name="firstName" id="firstname"></td>
                    </tr>  -->
                    <tr>
                        <td align="right"><label for="mail">Email:</label></td>
                        <td><input type="text" placeholder="votre mail" name="mail" id="mail"></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="password">Mot de passe:</label></td>
                        <td><input type="text" placeholder="votre mot de passe" name="pass" id="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><br><input type="submit" name=""></td>
                    </tr>
                </table>
            </form>
            <a href="">Retour a l'accueil</a>
        </div>
    </div>
</body>
</html>