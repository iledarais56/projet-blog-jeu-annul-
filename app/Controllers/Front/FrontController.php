<?php

namespace Project\Controllers\Front;

class FrontController{

    //pour aller sur la page accueil
    function accueil(){
        require'app/views/Front/accueil.php';
    }
//categories--------------------------------------------------------------

    //redirige vers  la page categories ou on applique la fonction getCategories() de CategorieManager
    function categories(){
        $categorie = new \Project\Models\CategorieManager();
        $Categories = $categorie->getCategories();

        require'app/views/Front/categories.php';
    }

    //redirige vers  la page categorie ou on applique la fonction getJeu($id) de jeuManager
    function categorie($id){
        $jeu = new \Project\Models\jeuManager();
        $jeux = $jeu->getJeu($id);

        require'app/views/Front/categorie.php';
    }

//jeux--------------------------------------------------------------   

    //redirige vers  la page jeufiche ou on applique la fonction getJeuFiche($id,$categorie) de jeuManager et la fonction getCommentaires($id) de CommentaireManager
    function jeuFiche($id,$categorie){
        $jeu = new \Project\Models\jeuManager();
        $getJeuFiche = $jeu->getJeuFiche($id,$categorie);
        $commentaire = new \Project\Models\CommentaireManager();
        $getCommentaires =$commentaire->getCommentaires($id);

        require'app/views/Front/jeuFiche.php';
    }

//commentaire--------------------------------------------------------------

    //redirige vers  la page commentaire
    function createCommentaire($id_jeu,$categorie,$title){
    
        require'app/views/Front/commentaire.php';
    }

    //redirige vers  la page commentaireFiche ou on applique la fonction getCommentaire($id) de CommentaireManager
    function getCommentaire($id){
        
        $commentaire = new \Project\Models\CommentaireManager();
        $getCommentaire = $commentaire->getCommentaire($id);
        require'app/views/Front/commentaireFiche.php';
    }

    //redirige vers  la page commentaires ou on applique la fonction getAllcommentaires($id) de CommentaireManager et getJeuName de JeuManager
    function getAllcommentaires($id_jeu){
        $name =new \Project\Models\JeuManager();
        $getJeuCategorieName = $name->getJeuName($id_jeu);
        $commentaire = new \Project\Models\CommentaireManager();
        $getAllcommentaires = $commentaire->getAllcommentaires($id_jeu);
        
        require'app/views/Front/commentaires.php';
    }

    //pour aller sur la page commentaires
    function commentaires(){
        require'app/views/Front/commentaires.php';
    }


    //redirige vers  la page commentaireFait ou on applique les fonctions newCommentaire et getCommentaire de CommentaireManager
    function newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$categorie,$id){
        $commentaire = new \Project\Models\CommentaireManager();
        $getCommentaire = $commentaire->getCommentaire($id);

        $commentaire = new \Project\Models\CommentaireManager();
        $Commentaires = $commentaire->newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$categorie,$id);

        require'app/views/Front/commentaireFait.php';
    }

    //redirige vers  la page commentaire ou on applique la fonction getCommentaire($id) de CommentaireManager
    function commentaire($id){
        $commentaire = new \Project\Models\CommentaireManager();
        $Commentaires = $commentaire->getCommentaire($id);
        require'app/views/Front/commentaire.php';
    }
    

// envoi de mail--------------------------------------------------------------

    //pour aller sur la page contact
    function contact(){
        require'app/views/Front/contact.php';
    }


    function contactMail($lastname,$firstname,$mail,$sujet,$content){
        $contactManager = new \Project\Models\ContactManager(); 

        //redirige vers  la page confrmMail
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $contactUserMail = $contactManager->mail($lastname,$firstname,$mail,$sujet,$content);
            require'app/views/Front/confirmMail.php';
        }else{//redirige vers  la page error
            header('Location: app/views/Front/error.php');
        }
    }

}