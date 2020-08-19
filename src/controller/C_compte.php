<?php

    include_once '../../config/autoload.php';
    use src\model\M_Compte;
    //require_once '../model/M_client.php';
    //require_once '../model/M_compte.php';


    extract($_POST);

    $db = new M_Compte();
    $solde = 5000;
    $rib = 1;
    $compte = new Compte();
    
    if ($choix_client == "nouveau") {
        if ($choix_type_client == "physique") {
            if ($choixcompte == "simple") {
                $client = new Client();
                $mat = codeAleatoire(8);
                $client-> setMat($mat);
                $client-> setCni($cni);
                $client-> setNom($nom);
                $client-> setPrenom($prenom);
                $client-> setSexe($sexe);
                $client-> setDatenaiss($datenaiss);
                $client-> setTel($tel);
                $client-> setAdresse($adr);
                $client-> setEmail($email);
                $cl =$db->addClient($client);
                
                $cli = $db->getClient($cl);

                $compte = new Compte();
                $rib = cleRip(9);
                $numero = cleRip(8);
                $compte -> setNumero($numero);
                $compte -> setRib($rib);
                $compte -> setSolde(50000);
                $compte -> setdateOuve(date('Y-m-d'));
                $compte -> setFraisOuv(25000);
                $compte -> setRemuneration(10000);
                $type = $db->getTypeCompte(1);
                $compte -> setTypeCompte($type);
                $compte -> setId_Client($cli);

                $cl =$db->addCompte($compte);

            } elseif ($choixcompte == "courant") {
                $client = new Client();
                $mat = codeAleatoire(8);
                $client-> setMat($mat);
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
    
                $cl =$db->addClient($client);
                // var_dump($cl);
                // die;
                $cli = $db->getClient($cl);
    
                $compte = new Compte();
                $rib = cleRip(9);
                $numero = cleRip(8);
                $compte -> setNumero($numero);
                $compte -> setRib($rib);
                $compte -> setSolde(50000);
                $compte -> setdateOuve(date('Y-m-d'));
                $compte -> setAgios(10000);
                $type = $db->getTypeCompte(2);
                $compte -> setTypeCompte($type);
                $compte -> setId_Client($cli);
    
                $cl =$db->addCompte($compte);
            } else {
                $client = new Client();
                $mat = codeAleatoire(8);
                $client-> setMat($mat);
                $client->setCni($cni);
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setSexe($sexe);
                $client->setDatenaiss($datenaiss);
                $client->setTel($tel);
                $client->setAdresse($adr);
                $client->setEmail($email);

                $cl =$db->addClient($client);
                $cli = $db->getClient($cl);
                
                

                $compte = new Compte();
                $rib = cleRip(9);
                $numero = cleRip(8);
                $compte -> setNumero($numero);
                $compte -> setRib($rib);
                $compte -> setSolde(50000);
                $compte -> setFraisOuv(25000);
                $compte -> setRemuneration(10000);
                $compte -> setDate_debut($date_debut);
                $compte->setdateOuve(date('Y-m-d'));
                $compte -> setDate_fin($date_fin);
                $type = $db->getTypeCompte(3);
                $compte -> setTypeCompte($type);
                $compte -> setId_Client($cli);

                $cl =$db->addCompte($compte);
                
            }
        } 
        else {
            $entreprise = new Entreprise();
            //$entreprise-> setId($id);
            $entreprise-> setNom($nom_entreprise);
            $entreprise-> setTel($tel_entreprise);
            $entreprise-> setEmail($email_entreprise);
            $entreprise-> setBudjet($budget_entreprise);
            $entreprise-> setAdresse($adr_entreprise);

            //$entreprisemodel = new M_Compte();
            
            $cl = $db-> addEntreprise($entreprise);
            $cli = $db->getEntreprise($cl);

            if ($choixcompte == "simple") {
                $compte = new Compte();
                $rib = cleRip(9);
                $numero = cleRip(8);
                $compte -> setNumero($numero);
                $compte -> setRib($rib);
                $compte -> setSolde(50000);
                $compte -> setdateOuve(date('Y-m-d'));
                $compte -> setFraisOuv(25000);
                $compte -> setRemuneration(10000);
                $type = $db->getTypeCompte(1);
                $compte -> setTypeCompte($type);
                $compte -> setIdEntreprise($cli);

                $cl =$db->addCompte($compte);
            } 
            else {
                $compte = new Compte();
                $rib = cleRip(9);
                $numero = cleRip(8);
                $compte -> setNumero($numero);
                $compte -> setRib($rib);
                $compte -> setSolde(50000);
                $compte -> setFraisOuv(25000);
                $compte -> setRemuneration(10000);
                $compte -> setDate_debut($date_debut);
                $compte->setdateOuve(date('Y-m-d'));
                $compte -> setDate_fin($date_fin);
                $type = $db->getTypeCompte(3);
                $compte -> setTypeCompte($type);
                $compte -> setIdEntreprise($cli);

                $cl =$db->addCompte($compte);
            }
        }
    }

    function codeAleatoire($car)
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

    function cleRip($rip)
   {
       $string = "";
       $chaine = "012643789";
       srand((double)microtime()*1000000);
       for($i=0; $i<$rip; $i++)
       {
           $string .= $chaine[rand()%strlen($chaine)];
       }
       return $string;
   }
    