<?php
    namespace controller;
    include_once '../config/autoload.php';
    //require_once '../model/M_client.php';
    //require_once '../model/M_compte.php';


    extract($_POST);

    $db = new \model\DB();
    $mat = $db->codeAleatoire(8);

    $client = new \model\Client();
    
    if($choix_client == "nouveau"){
        if($choix_type_client == "physique"){
            if($choixcompte == "simple"){
                $client = new Client();
                $client-> setMat(codeAleatoire(8));
                $client-> setCni($cni);
                $client-> setNom($nom);
                $client-> setPrenom($prenom);
                $client-> setSexe($sexe);
                $client-> setDatenaiss($datenaiss);
                $client-> setTel($tel);
                $client-> setAdresse($adr);
                $client-> setEmail($email);
                $client-> set(1);
                
                var_dump($client);
                header("location:../view/V_accueil.php?ok=$client");
            }elseif($choixcompte == "courant"){
                $client = new Client();
                $client-> setMat(1);
                $client->setCni($cni);
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setSexe($sexe);
                $client->setDatenaiss($datenaiss);
                $client->setTel($tel);
                $client->setAdresse($adr);
                $client->setEmail($email);
                $client->setRaison_sociale($raison_sociale);
                $client->setSalaire($salaire);
                $client->setEmpl($nom_employeur);
                $client->setAdrEmpl($adr_employeur);

            }else{
                $client = new Client();
                $client-> setMat(1);
                $client->setCni($cni);
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setSexe($sexe);
                $client->setDatenaiss($datenaiss);
                $client->setTel($tel);
                $client->setAdresse($adr);
                $client->setEmail($email);
                var_dump($client);
                
                header("location:../view/V_accueil.php?ok=$client");
            }

        }

        function getDateNow()
        {
        $tz_object = new \DateTimeZone('UTC');
        $datetime = new \DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d');
        }

    }

    

?>