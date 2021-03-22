<?php
namespace Project\Models;

class CategorieManager extends Manager{

    //requetes categories liées aux categories

    //affiche tout  de la table categories
    public function getCategories(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM categories');

        return $req;
    }

    //affiche tout  de la table categories ou l'id =$id
    public function getCategorie($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT * FROM categories  WHERE id=?');
        $req->execute(array($id));
        return $req;
    }
    
    //affiche tout  de la table categories ou l'id = categorie du jeu avec l'id=$id
    public function getJeuCategorie($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT * FROM categories  WHERE id=(SELECT categorie FROM jeux where id=?)');
        $req->execute(array($id));
        return $req;
    }


    //affiche le nombre de jeux par catégorie
    public function CategorieNumberOfJeux($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT COUNT(*)AS number FROM jeux where categorie = $id');
        $req->execute(array($id));
        return $req;
    }
    
}