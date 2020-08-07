<?php
    namespace src\model;
    require_once './../../bootstrap.php';
    //require_once 'M_db.php';
    
    
    class Client
    {
        private $db;
        public function __construct()
        {
            $DB = new DB();
            $this->db = $entityManager;
        }

        public function addEntreprise($entreprise)
        {
            $this->db->persist($entreprise);
            $this->db->flush();

            return $entreprise->getId();
        }
    }
?>