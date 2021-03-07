<?php

session_start();
require_once __DIR__ .'/vendor/autoload.php';

try{
    $backController = new \Project\Controllers\Back\BackController;

    if(isset($_GET['action'])){

//les différentes actions récupérées en back:


        //connexion et creation utilisateurs
        if($_GET['action']=='createAdmin'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $firstName = $_POST['firstName'];

            $mdp = password_hash($pass,PASSWORD_DEFAULT);
            $backController->creatAdmin($mail,$mdp,$firstName);
        }
        elseif($_GET['action']=='connexionAdmin'){
            $mail = $_POST['mail'];
            $mdp = $_POST['pass'];

            if(!empty($mail)&&($mdp)){
                $backController->connexion($mail,$mdp);
            }else{
                throw new Exception('Renseigner vos identifiants');
            }


        }//gestion des mails
        elseif($_GET['action']=='mails'){
            $backController->mails();
        }
        elseif($_GET['action']=='deleteMail'){
            $id = $_GET['id'];
            $backController->deleteMail($id);

        }//retour au tableau de bord
        elseif($_GET['action']=='tdbAdmin'){
            $backController->tdbAdmin();

        }//deconnexion
        elseif($_GET['action']=='deconnexion'){
            session_destroy();
            header('location: index.php');
            
        }//gestion des jeux
        elseif($_GET['action']=='Jeu'){
            $id = $_GET['id'];
            $backController->jeu($id); 
        }
        elseif($_GET['action']=='jeuxListe'){
            $backController->jeuxListe(); 
        }
        elseif($_GET['action']=='deleteJeu'){
            $id = $_GET['id'];
            $backController->deleteJeu($id);
        }
        elseif($_GET['action']=='editionJeu'){
            $id = $_GET['id'];
            $backController->editionJeu($id);
        }
        elseif($_GET['action']=='updateJeu'){
            $id = $_GET['id'];
            $updatetitle = $_POST['title'];
            $updatecontent = $_POST['content'];
            $updatecategorie = $_POST['categorie'];
            $updateimage = $_POST['img'];
            $updateAvis = $_POST['avis'];
            $updateNote = $_POST['note'];
            $backController->updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updateAvis,$updateNote);
        }
        elseif($_GET['action']=='createJeu'){
            $backController->createJeu(); 
        }
        elseif($_GET['action']=='newJeu'){
            $newTitle = $_POST['title'];
            $newContent = $_POST['content'];
            $newImage = $_POST['img'];
            $newCategorie = $_POST['categorie'];
            $newAvis = $_POST['avis'];
            $newNote = $_POST['note'];

            $backController->newJeu($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote); 
           
        }
        elseif($_GET['action']=='commentaires'){
            $id_jeu = $_GET['id'];
            $backController->getAllcommentaires($id_jeu); 
        }
        elseif($_GET['action']=='deletecommentaire'){
            $id = $_GET['id'];
            $backController->deletecommentaire($id); 
        }
        

        //gestion des images
        elseif($_GET['action']=='images'){
            $backController->images(); 
        }
        elseif($_GET['action']=='image'){
            $backController->image(); 
        }
        elseif($_GET['action']=='creatImage'){
            $title = htmlspecialchars($_POST['title']);
            if(!empty($title)){
                $backController->creatImage($title); 
            }
            
        }

    }else{
        $backController->connexionAdmin();
    }
}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}