<?php
namespace Project\Models;

class JeuManager extends Manager{
 
    
    public function jeu($_title,$_content,$_categorie,$_image){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare('INSERT INTO jeux(title,content,categorie,img)VALUE(?,?,?,?)');
        $req->execute(array($_title,$_content,$_categorie,$_image));
        return $req;
    }
    public function getJeux(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM jeux ORDER BY id DESC');
        return $req;
    }
  
    public function deleteJeux($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM jeux WHERE id=?');
        $req->execute(array($id));
    }
    
    public function getJeu($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE categorie=?');
        $req->execute(array($id));
        return $req;
    }
    public function getJeuAdmin($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE id=?');
        $req->execute(array($id));
        return $req;
    }
    public function getJeuFiche($id,$categorie){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT *FROM jeux WHERE id=? AND categorie=?');
        $req->execute(array($id,$categorie));
        return $req;
    }
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
    public function newJeu($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO jeux(title,content,img,categorie,avis,note)VALUE(?,?,?,?,?,?)');
        $req->execute(array($newTitle,$newContent,$newImage,$newCategorie,$newAvis,$newNote));
        return $req;    
        
    }
    
    public function newImage($Title,$alt){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO images(title,alt)VALUE(?,?)');
        $req->execute(array($Title,$alt));
        return $req;    
        
    }
   
}