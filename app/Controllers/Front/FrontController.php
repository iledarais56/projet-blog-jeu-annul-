<?php

namespace Project\Controllers\Front;

class FrontController{
    function accueil(){
        require'app/views/Front/accueil.php';
    }
    function categories(){
        $categorie = new \Project\Models\CategorieManager();
        $Categories = $categorie->getCategories();

        require'app/views/Front/categories.php';
    }
    function categorie($id){
        $jeu = new \Project\Models\jeuManager();
        $jeux = $jeu->getJeu($id);

        require'app/views/Front/categorie.php';
    }
    function jeuFiche($id,$categorie){
        $jeu = new \Project\Models\jeuManager();
        $getJeuFiche = $jeu->getJeuFiche($id,$categorie);

        require'app/views/Front/jeuFiche.php';
    }
    function contact(){
        require'app/views/Front/contact.php';
    }
    // envoi de mail
    function contactMail($lastname,$firstname,$mail,$sujet,$content){
        $contactManager = new \Project\Models\ContactManager(); 

        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $contactUserMail = $contactManager->mail($lastname,$firstname,$mail,$sujet,$content);
            require'app/views/Front/confirmMail.php';
        }else{
            header('Location: app/views/Front/error.php');
        }
    }

}