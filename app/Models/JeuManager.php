<?php
namespace Project\Models;

class JeuManager extends Manager{

 //requetes liées aux jeux
    
    //affiche tous les jeux par id decroissante
    public function getJeux(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM jeux ORDER BY id DESC');
        return $req;
    }

    //supprime le jeu a l'id=$id
    public function deleteJeux($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM jeux WHERE id=?');
        $req->execute(array($id));
    }

    //affiche les jeux ont la categorie =$id
    public function getJeu($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE categorie=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche le jeu a l'id =$id
    public function getJeuAdmin($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche le jeu a l'id =$idet a la categorie =$categorie
    public function getJeuFiche($id,$categorie){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE id=? AND categorie=?');
        $req->execute(array($id,$categorie));
        return $req;
    }

    //met a jour les données du jeu
    public function updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updateAvis,$updateNote){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('UPDATE jeux SET title= :title, content= :content, categorie= :categorie, img= :img, avis= :avis, note= :note WHERE id=:id');
        $req->execute([
            'id'=>$id,
            'title'=>$updatetitle,
            'content'=>$updatecontent,
            'categorie'=>$updatecategorie,
            'img'=>$updateimage,
            'avis'=>$updateAvis,
            'note'=>$updateNote
        ]);
    }

    //injecte un nouveau jeu dans la table jeux
    public function newJeu($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO jeux(title,content,img,categorie,avis,note)VALUE(?,?,?,?,?,?)');
        $req->execute(array($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote));
        return $req;    
        
    }
    
}