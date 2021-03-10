<?php
namespace Project\Models;

class TopManager extends Manager{

//requetes liées aux top
    
    //affiche tout de la table tops
    public function getTop(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM tops ');
        return $req;
    }

     //affiche les jeux ont  id =$id_jeu de tops
     public function getJeuFromTop(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT `id`As numero,(SELECT id FROM `jeux` WHERE `id`=`id_jeu`)AS`id`,(SELECT categorie FROM `jeux` WHERE `id`=`id_jeu`)AS`categorie`,(SELECT title FROM `jeux` WHERE `id`=`id_jeu`)AS`title`,(SELECT img FROM `jeux` WHERE `id`=`id_jeu`)AS`img` FROM `tops`ORDER BY id DESC');
        return $req;
    }
    
    //met a jour les données du top
    public function updateTop($id,$updateId_jeux){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('UPDATE tops SET id_jeux= :id_jeux WHERE id=:id');
        $req->execute([
            'id'=>$id,
            'id_jeux'=>$updateId_jeux
           
        ]);
    }

}