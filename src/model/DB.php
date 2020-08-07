<?php
    namespace src\model;
    
class DB{


    public function getConnexion()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'banquedupeuplepoo';
        $dsn = "mysql:host=$host;dbname=$dbname";

        try {
            $mydb = new \PDO($dsn,$user,$password);
            $mydb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            die('Erreur : '.$ex->getMessage());
        }
        return $mydb;
    }











}
    
?>