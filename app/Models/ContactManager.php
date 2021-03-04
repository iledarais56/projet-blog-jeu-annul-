<?php
namespace Project\Models;

class ContactManager extends Manager{
    public function mail($_lastname,$_firstname,$_mail,$_sujet,$_content){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare('INSERT INTO mails(lastname,firstname,mail,sujet,content)VALUE(?,?,?,?,?)');
        $req->execute(array($_lastname,$_firstname,$_mail,$_sujet,$_content));
        return $req;
    }
    public function getMails(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT *FROM mails ORDER BY id DESC');
        return $req;
    }
    public function deleteMail($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM mails WHERE id=?');
        $req->execute(array($id));
    }
    
}