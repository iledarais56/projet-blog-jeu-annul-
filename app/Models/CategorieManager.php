<?php
namespace Project\Models;

class CategorieManager extends Manager{

    public function getCategories(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM categories');

        return $req;
    }
    public function getCategorie($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT * FROM jeux  WHERE id=?');
        $req->execute(array($id));
        return $req;
    }
    public function getJeuCategorieName($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT title FROM categories  WHERE id=(SELECT categorie FROM jeux where id=?)');
        $req->execute(array($id));
        return $req;
    }

}