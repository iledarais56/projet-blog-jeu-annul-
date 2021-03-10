<?php
namespace Project\Models;

class CommentaireManager extends Manager{
    //les requetes liées aux commentaires

    //injecte un nouveau commentaire dans la table commentaires
    public function newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$categorie,$id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(id_jeu,pseudo,content,totalContent)VALUE(?,?,?,?)');
        $req->execute(array($newIdJeu,$newPseudo,$newContent,$newTotalContent));
        return $req; 
    }

    //affiche tout  de la table commentaires + le titre(en tant que titreJeu) et la categorie(en tant que categorieJeu) de la table jeux ou id=id_jeu le tout ou l'id =  $id
    public function getCommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *,(SELECT  `title` FROM `jeux` WHERE `id`=`id_jeu`)AS titreJeu,(SELECT `categorie` FROM `jeux` WHERE `id`=`id_jeu`)AS categorieJeu FROM `commentaires` WHERE `id`=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche tout  de la table commentaires ou l'id_jeu =  $id rangé par ordre decroissant dans une limite de 4 commentaires
    public function getCommentaires($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM commentaires WHERE id_jeu=? ORDER BY id DESC limit 4');
        $req->execute(array($id));
        return $req;
    }

    //affiche tout  de la table commentaires et la categorie(en tant que categorieJeu) de la table jeux ou id=id_jeu le tout ou l'id_jeu =  $id rangé par ordre decroissant 
    public function getAllcommentaires($id_jeu){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *,(SELECT `categorie` FROM `jeux` WHERE `id`=`id_jeu`)AS categorieJeu FROM commentaires WHERE id_jeu=? ORDER BY id DESC ');
        $req->execute(array($id_jeu));
        return $req;
    }
    
    //injecte un nouveau commentaire dans la table commentaires avec seulement le champ id jeu rempli
    public function createCommentaire($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(id_jeu)VALUE(?)');
        $req->execute(array($id));
        return $req;
    }
    
    //supprime le commentaire a l'id=$id
    public function deletecommentaire($id){
        
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM commentaires WHERE id=?');
        $req->execute(array($id));
    }
   
    
}