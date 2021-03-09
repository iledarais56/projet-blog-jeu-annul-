<?php
namespace Project\Models;

class UserManager extends Manager{

    //requetes liées aux utilisateurs

    //injecte un nouvel utilisateur dans la table utilisateurs
    public function creatAdmin($mail,$mdp,$firstName){
        $bdd = $this->bdConnect();
        $user = $bdd->prepare('INSERT INTO utilisateurs(mail,mdp,firstname)VALUE(?,?,?)');
        $user->execute(array($mail,$mdp,$firstName));
        
        return $user;
    }

    //recupere tout dans la table utilisateur  ou mail=$mail
    public function recupMdp($mail,$mdp){
        $bdd = $this->bdConnect();
        $req =$bdd->prepare('SELECT *FROM utilisateurs WHERE mail =? ');
        $req->execute(array($mail));

        return $req;
    }
    
}