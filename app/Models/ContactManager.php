<?php
namespace Project\Models;

class ContactManager extends Manager{

    //requetes liées au  contact(formulaire)

    //injecte un nouveau mail dans la table mails
    public function mail($_lastname,$_firstname,$_mail,$_sujet,$_content){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare('INSERT INTO mails(lastname,firstname,mail,sujet,content)VALUE(?,?,?,?,?)');
        $req->execute(array($_lastname,$_firstname,$_mail,$_sujet,$_content));
        return $req;
    }

    //affiche tous les mails par id decroissante
    public function getMails(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM mails ORDER BY id DESC');
        return $req;
    }

    //supprime le mail avec l'id=$id
    public function deleteMail($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM mails WHERE id=?');
        $req->execute(array($id));
    }
    
}