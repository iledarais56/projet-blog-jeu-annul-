<?php
namespace Project\Models;

class CommentaireManager extends Manager{

    public function newCommentaire($newIdJeu,$newPseudo,$newContent){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(id_jeu,pseudo,content)VALUE(?,?,?)');
        $req->execute(array($newIdJeu,$newPseudo,$newContent));
        return $req; 
    }
    public function getcommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id=?');
        $req->execute(array($id));
        return $req;
    }
    public function getcommentaires($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id_jeu=?');
        $req->execute(array($id));
        return $req;
    }
    public function createCommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

}