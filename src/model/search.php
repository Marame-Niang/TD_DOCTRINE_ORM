<?php
    namespace src\model;

    require_once './../../bootstrap.php';
    //require_once 'M_db.php';
    
    
    class Client
    {
        public function searchClientbyMat($mat)
        {
            $sql = "SELECT * FROM personne WHERE cin LIKE '%".$mat."%'";
        
            return $this->db->query($sql);
        }
    }
?>