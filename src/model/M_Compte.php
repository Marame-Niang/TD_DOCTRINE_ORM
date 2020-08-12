<?php
    namespace src\model;

    class M_Compte{
 
        protected $db;

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

            return $client->getId();
        }

        public function getClient($id){
            return  $this->db->find('Client',$id);
        }

        public function addEntreprise($entreprise)
        {
            $this->db->persist($entreprise);
            $this->db->flush();

            return $entreprise->getId();
        }

        public function getEntreprise($id){
            return  $this->db->find('Entreprise',$id);
        }

        public function addTypeCompte($type)
        {
            $this->db->persist($type);
            $this->db->flush();

            return $type->getId();
        }

        public function getTypeCompte($id){
            return  $this->db->find('TypeCompte',$id);
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

