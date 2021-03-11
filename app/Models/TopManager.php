<?php
namespace Project\Models;

class TopManager extends Manager{

//requetes liées aux top
    
    //affiche tout de la table tops
    public function getTop(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM tops');
        return $req;
    }

     //affiche les jeux dont  id =$id_jeu de tops
     public function getJeuFromTop(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT `id`As numero,(SELECT id FROM `jeux` WHERE `id`=`id_jeu`)AS`id`,(SELECT categorie FROM `jeux` WHERE `id`=`id_jeu`)AS`categorie`,(SELECT title FROM `jeux` WHERE `id`=`id_jeu`)AS`title`,(SELECT img FROM `jeux` WHERE `id`=`id_jeu`)AS`img` FROM `tops`ORDER BY id DESC');
        return $req;
    }
    
    //met a jour les données du top
    public function updateTop($update1,$update2,$update3){
        $bdd = $this->bdConnect();
        $req1 = $bdd->prepare("UPDATE `tops` SET `id_jeu`=(SELECT `id`FROM `jeux` WHERE `title`= '$update1') WHERE `id`=1");
        $req1->execute(array($update1));

        $req2 = $bdd->prepare("UPDATE `tops` SET `id_jeu`=(SELECT `id`FROM `jeux` WHERE `title`= '$update2') WHERE `id`=2");
        $req2->execute(array($update2));

        $req3 = $bdd->prepare("UPDATE `tops` SET `id_jeu`=(SELECT `id`FROM `jeux` WHERE `title`= '$update3') WHERE `id`=3");
        $req3->execute(array($update3));
    }

}