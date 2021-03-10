<?php
namespace Project\Models;

class Manager{

    //connection a la base de données
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=soutenance;charset=utf8', 'root','');
            return $bdd;
        }catch(Exception $e){
            die('Erreur:'.$e->getMessage());
        }
    }

    //ORM
    const TABLES = array(
        "CategorieManager" => "categories",
        "CommentaireManager" => "commentaires",
        "ContactManager" => "contacts",
        "ImageManager" => "images",
        "jeuManager" => "jeux",
        "UserManager" => "users",
    );
    protected static function all(){
        $tableAry = explode("\\",get_called_class());
        $manager = $tableAry[count($tableAry)-1];
        $table = self::TABLES[$manager];

        $bdd = self::bdCx();
        $req = $bdd->query('SELECT * FROM {$table} ');
        return $req;
    }
    protected static function bdCx(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=soutenance;charset=utf8', 'root','');
            return $bdd;
        }catch(Exception $e){
            die('Erreur:'.$e->getMessage());
        }
    }
}