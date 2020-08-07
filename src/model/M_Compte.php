<?php
    namespace src\model;

    class M_Compte{
 
        private $db;

        public function __construct()
        {
           require_once '../../bootstrap.php';

            $this->db = $entityManager;
        }

        public function addCompte($compte)
        {

            $this->db->persist($compte);
            $this->db->flush();

            return $compte->getId();
        }

        public function addClient($client)
        {
            $this->db->persist($client);
            $this->db->flush();

            return $client->getMat();
        }
        public function getClient($id){
            return  $this->db->find('Client',$id);
        }
        public function getTypeCompte($type){
            return  $this->db->find('TypeCompte',$type);
        }


    public function getDateNow()
    {
        $tz_object = new \DateTimeZone('UTC');
        $datetime = new \DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d');
    }


   public  function codeAleatoire($car)
   {
       $string = "";
       $chaine = "2643789ABDCEFGHJKMNPRTUVW";
       srand((double)microtime()*1000000);
       for($i=0; $i<$car; $i++)
       {
           $string .= $chaine[rand()%strlen($chaine)];
       }
       return $string;
   }

   public function cleRip()
   {
       $string = "";
       $chaine = "012643789";
       srand((double)microtime()*1000000);
       for($i=0; $i<2; $i++)
       {
           $string .= $chaine[rand()%strlen($chaine)];
       }
       return $string;
   }


    }

