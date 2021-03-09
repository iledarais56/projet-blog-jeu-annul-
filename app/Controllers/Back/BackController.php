<?php
namespace Project\Controllers\Back;
Use Project\Models\UserManager;

class BackController{

//administration---------------------------------------------------------------------

    //redirige vers la page connexionAdmin
    function connexionAdmin(){
        require'app/views/Back/connexionAdmin.php';
    }

    //pour rediriger vers la fonction creatAdmin de UserManager
    function creatAdmin($firstName,$mdp,$mail){
        $userManager = new \Project\Models\UserManager();
        $user = $userManager->creatAdmin($firstName,$mdp,$mail);
    }

    //verifie les bons identifiants puis redirige vers le tableau de bord de l'admin
    function connexion($mail,$mdp){
        $userManager = new \Project\Models\UserManager();
        $connexionAdm = $userManager->recupMdp($mail,$mdp);
        $result = $connexionAdm->fetch();
        
        $isPasswordCorrect = password_verify($mdp,$result['mdp']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['firstname'];

        if($isPasswordCorrect){
            require'app/views/Back/tableauDeBord.php';
        }else{
            echo'Vos identifiants sont incorrects ';
        }
    }

    //redirige vers la page tableauDeBord
    function tdbAdmin(){
        require'app/views/Back/tableauDeBord.php';
    }

    //redirige vers la page mails ou on applique la fonction getMails() de ContactManager
    function mails(){
        $mails = new \Project\Models\ContactManager();
        $allMails = $mails->getMails();

        require'app/views/Back/mails.php';
    }

    //redirige vers l'action mails ou on applique la fonction deleteMail($id) de ContactManager
    function deleteMail($id){
        $mail = new \Project\Models\ContactManager();
        $deleteMails = $mail->deleteMail($id);

        header('location: indexAdmin.php?action=mails');
    }


//gestion des jeux------------------------------------------------------------------------------

    //redirige vers la page gestionjeu ou on applique la fonction getJeuAdmin($id) de JeuManager
    function jeu($id){
        $jeu = new \Project\Models\JeuManager();
        $getJeuAdmin = $jeu->getJeuAdmin($id);
       
        require'app/views/Back/gestionjeu.php';
    }

    //redirige vers la page listejeux ou on applique la fonction getJeux() de JeuManager
    function jeuxListe(){
        $jeux = new \Project\Models\JeuManager();
        $allJeux = $jeux->getJeux();

        require'app/views/Back/listejeux.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction deleteJeux($id) de JeuManager
    function deleteJeu($id){
        $jeu = new \Project\Models\JeuManager();
        $deleteJeux = $jeu->deleteJeux($id);

        header('location: indexAdmin.php?action=jeuxListe');
    }

    //redirige vers la page createJeu
    function createJeu(){
       
        require'app/views/Back/createJeu.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction newJeu() de JeuManager
    function newJeu($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote){
        $jeu = new \Project\Models\JeuManager();
        
        $newJeu = $jeu->newJeu($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote);

        header('location: indexAdmin.php?action=jeuxListe');
    }

    //redirige vers la page jeu ou on applique la fonction getJeuCategorieName($id) de CategorieManager  et la fonction getJeu($id) de JeuManager
    function editionJeu($id){
        $categorie = new \Project\Models\CategorieManager();
        $getCategorie = $categorie->getJeuCategorieName($id);

        $jeu = new \Project\Models\JeuManager();
        $getJeu = $jeu->getJeuAdmin($id);

        require'app/views/Back/jeu.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction updateJeu() de JeuManager
    function updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updateAvis,$updateNote){
        $jeu = new \Project\Models\JeuManager();
        $updateJeu = $jeu->updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updateAvis,$updateNote);

        header('location: indexAdmin.php?action=jeuxListe');
    }
    //recupere tous les commentaires sur le jeu dont l'id=$id_jeu et le nom du jeu
    function getAllcommentaires($id_jeu){
        $name =new \Project\Models\JeuManager();
        $getJeuCategorieName = $name->getJeuName($id_jeu);
        $commentaire = new \Project\Models\CommentaireManager();
        $getAllcommentaires = $commentaire->getAllcommentaires($id_jeu);

        require'app/views/Back/commentaires.php';
    }
    //redirige vers l'action  ou on applique la fonction deleteJeux($id) de JeuManager
    function deletecommentaire($id){
        $jeu = new \Project\Models\CommentaireManager();
        $deletecommentaire = $jeu->deletecommentaire($id);
       
        require'app/views/Back/tableauDeBord.php';
    }


//gestion des images--------------------------------------------------------------------------------

    //redirige vers la page image ou on applique la fonction getImages() de ImageManager
    function images(){
        $images = new \Project\Models\ImageManager();
        $allImages = $images->getImages();

        require'app/views/Back/image.php';
    }

    //redirige vers la page creatimage
    function image(){

        require'app/views/Back/creatimage.php';
    }

    //permet de verifier que l'image televersée est au bon format et a la bonne taille
    function creatimage($title){
        $target_dir = "app/public/front/images/"; //spécifie le répertoire où le fichier va être placé
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);// spécifie le chemin du fichier à télécharger
        $uploadOk = 1; // n'est pas encore utilisé (sera utilisé plus tard)
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //contient l'extension du fichier (en minuscules)
        // on vérifie que le fichier image est une image réelle
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Désolé, votre fichier est trop volumineux. ";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    echo "Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés. ";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Désolé, votre avatar n'a pu être envoyé.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $userManager = new \Project\Models\ImageManager();
                        $uploadImg = $userManager->creatImage($title, $target_file);
                        // var_dump($target_file);
                        header('Location: indexAdmin.php?action=images');
                    } else {
                        echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                    }
                }
            } else {
                echo "Ce fichier n'est pas une image. ";
                $uploadOk = 0;
            }
        }
     }
}