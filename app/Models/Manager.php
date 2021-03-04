<?php
namespace Project\Models;

class Manager{
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=soutenance;charset=utf8', 'root','');
            return $bdd;
        }catch(Exception $e){
            die('Erreur:'.$e->getMessage());
        }
    }
}