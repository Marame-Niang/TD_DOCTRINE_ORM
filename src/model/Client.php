<?php
     namespace src\model;

    require_once '../../bootstrap.php';
    //require_once 'M_db.php';
    
    
    class Client
    {
        private $db;
        public function __construct()
        {
            $DB = new DB();
            $this->db = $entityManager;
        }

        public function addClient($client)
        {
            $this->db->persist($client);
            $this->db->flush();

            return $client->getMat();
        }

        
        public function searchClientbyMat($mat)
        {
            $sql = "SELECT * FROM personne WHERE cin LIKE '%".$mat."%'";
        
            return $this->db->query($sql);
        }
    }
