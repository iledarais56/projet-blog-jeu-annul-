<?php

session_start();
require_once __DIR__ .'/vendor/autoload.php';

try{
    $frontController = new \Project\Controllers\Front\FrontController();
    if(isset($_GET['action'])){

//les différentes actions récupérées en front:


        //gestion des categories
        if($_GET['action']=='categories'){ 
            $frontController->categories();
        }
        if($_GET['action']=='categorie'){
            $id= $_GET['id'];
            $frontController->categorie($id);
        }
        if($_GET['action']=='jeuFiche'){
            $id= $_GET['id'];
            $categorie=$_GET['categorie'];
            $frontController->jeuFiche($id,$categorie);
        }

        //gestion des commentaires
        elseif($_GET['action']=='createCommentaire'){
            $title =$_GET['title'];
            $categorie =$_GET['categorie'];
            $id_jeu= $_GET['id'];
            $frontController->createCommentaire($id_jeu,$categorie,$title);
        }
        elseif($_GET['action']=='postCommentaire'){
            $id =$_GET['id_jeu'];
            $categorie =$_GET['categorie'];
            $newIdJeu =$_GET['id_jeu'];
            $newPseudo = $_POST['pseudo'];
            $newContent = $_POST['content'];
            $newTotalContent = $_POST['totalContent'];
            $frontController->newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$categorie,$id); 
        }
        elseif($_GET['action']=='getCommentaire'){
            $id= $_GET['id'];
            $frontController->getCommentaire($id);
        }
        elseif($_GET['action']=='commentaires'){
            $frontController->commentaires();
        }
        elseif($_GET['action']=='getAllcommentaires'){
            $id_jeu= $_GET['id'];
            $frontController->getAllcommentaires($id_jeu);
        }
        

        //gestion des contacts
        elseif($_GET['action']=='contact'){
            $frontController->contact();
        }
        //envoi du mail en bdd
        elseif($_GET['action']=='contactMail'){
            $_lastname = htmlspecialchars($_POST['lastname']);
            $_firstname = htmlspecialchars($_POST['firstname']);
            $_mail = htmlspecialchars($_POST['mail']);
            $_sujet = htmlspecialchars($_POST['sujet']);
            $_content = htmlspecialchars($_POST['content']);

            if(!empty($_lastname) && (!empty($_firstname) && (!empty($_mail) && (!empty($_sujet) && (!empty($_content)))))){
                $frontController->contactMail($_lastname,$_firstname,$_mail,$_sujet,$_content);
            }else{
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }

    }else{
        $frontController->accueil();
    }

}catch(Exception $e){
    die('Erreur:'.$e->getMessage() );
};