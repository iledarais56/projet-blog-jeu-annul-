<?php
namespace Project\Models;

class CommentaireManager extends Manager{
    //les requetes liées aux commentaires

    //injecte un nouveau commentaire dans la table commentaires
    public function newCommentaire($newIdJeu,$newPseudo,$newContent){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(id_jeu,pseudo,content)VALUE(?,?,?)');
        $req->execute(array($newIdJeu,$newPseudo,$newContent));
        return $req; 
    }

    //affiche tout  de la table commentaires ou l'id =  $id
    public function getcommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche tout  de la table commentaires ou l'id_jeu =  $id rangé par ordre decroissant dans une limite de 4 commentaires
    public function getcommentaires($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id_jeu=? ORDER BY id DESC LIMIT 4');
        $req->execute(array($id));
        return $req;
    }

    //affiche tout  de la table commentaires ou l'id_jeu =  $id rangé par numero d'id
    public function getAllcommentaires($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id_jeu=? ORDER BY id ');
        $req->execute(array($id));
        return $req;
    }
    
    //injecte un nouveau commentaire dans la table commentaires avec seulement le champ id jeu rempli
    public function createCommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(id_jeu)VALUE(?)');
        $req->execute(array($id));
        return $req;
    }
    
}