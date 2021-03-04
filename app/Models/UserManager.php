<?php
namespace Project\Models;

class UserManager extends Manager{
    public function creatAdmin($mail,$mdp,$firstName){
        $bdd = $this->bdConnect();
        $user = $bdd->prepare('INSERT INTO utilisateurs(mail,mdp,firstname)VALUE(?,?,?)');
        $user->execute(array($mail,$mdp,$firstName));
        
        return $user;
    }

    public function recupMdp($mail,$mdp){
        $bdd = $this->bdConnect();
        $req =$bdd->prepare('SELECT *FROM utilisateurs WHERE mail =? ');
        $req->execute(array($mail));

        return $req;
    }
    public function getImages(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM images');
        return $req;
    }
    public function creatImage($title,$target_file){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO images(title,img)VALUE(?,?)');
        $req->execute(array($title,$target_file));
        
        return $req;
    }
}