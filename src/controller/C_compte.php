<?php

    include_once '../../config/autoload.php';
    use src\model\M_Compte;
    //require_once '../model/M_client.php';
    //require_once '../model/M_compte.php';


    extract($_POST);

    $db = new M_Compte();
    $mat = $db->codeAleatoire(8);
    $numero =$db->codeAleatoire(8);
    $solde = 0;
    $rib = 1;
    $dateOuve = $db->getDateNow();

    $compte = new Compte();
    

    if ($choix_client == "nouveau") {
        if ($choix_type_client == "physique") {
            if ($choixcompte == "simple") {
                $client = new Client();
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
                $compte -> setNumero($numero);
                $compte -> setMatriculeClient($client->getMat());
                $compte -> setRib($rib);
                $compte -> setSolde($solde);
                $compte -> setdateOuve($dateOuve);
                $compte -> setFraisOuv(25000);
                $compte -> setRemuneration(10000);
                $type = $db->getTypeCompte(1);
                $compte -> setTypeCompte($type);
                $compte -> setMatriculeClient($cli);

                $cl =$db->addCompte($compte);
            }
        } elseif ($choixcompte == "courant") {
            $client = new Client();
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
            $cli = $db->getClient($cl);

            $compte = new Compte();
            $compte -> setNumero($numero);
            $compte -> setMat();
            $compte -> setRib($rib);
            $compte -> setSolde($solde);
            $compte -> setdateOuve($dateOuve);
            $compte -> setdateOuve(10000);
            $type = $db->getTypeCompte(2);
            $compte -> setTypeCompte($type);
            $compte -> setMatriculeClient($cli);

            $cl =$db->addCompte($compte);
            var_dump($compte);
            
        } else {
            $client = new Client();
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
            var_dump($client);

            $compte = new Compte();
            $compte -> setNumero($numero);
            $compte -> setMat();
            $compte -> setRib($rib);
            $compte -> setSolde($solde);
            $compte -> setdateOuve($dateOuve);
            $compte -> setFraisOuv(25000);
            $compte -> setRemuneration(10000);
            $compte -> setDate_debut($date_debut);
            $compte -> setDate_fin($date_fin);
            $type = $db->getTypeCompte(2);
            $compte -> setTypeCompte($type);
            $compte -> setMatriculeClient($cli);

            $cl =$db->addCompte($compte);
            var_dump($compte);
        }
    }
    else{
        $entreprise = new Entreprise();
        $entreprise-> setId($id);
        $entreprise-> setNom($nom_entreprise);
        $entreprise-> setTel($tel_entreprise);
        $entreprise-> setEmail($email_entreprise);
        $entreprise-> setBudjet($budget_entreprise);
        $entreprise-> setAdresse($adr_entreprise);     
        $cl = $db-> addEntreprise($entreprise); 
        $cli = $db->getEntreprise($cl);

        if ($choixcompte == "simple") {
            $compte = new Compte();
            $compte -> setNumero($numero);
            $compte -> setMat();
            $compte -> setRib($rib);
            $compte -> setSolde($solde);
            $compte -> setdateOuve($dateOuve);
            $compte -> setFraisOuv(25000);
            $compte -> setRemuneration(10000);
            $compte -> setDate_debut($date_debut);
            $compte -> setDate_fin($date_fin);
            $type = $db->getTypeCompte(1);
            $compte -> setTypeCompte($type);
            $compte -> setIdEtreprise($cli);

            $cl =$db->addCompte($compte);
        }
        else{
            $compte = new Compte();
            $compte -> setNumero($numero);
            $compte -> setMat();
            $compte -> setRib($rib);
            $compte -> setSolde($solde);
            $compte -> setdateOuve($dateOuve);
            $compte -> setdateOuve(10000);
            $type = $db->getTypeCompte(2);
            $compte -> setTypeCompte($type);
            $compte -> setIdEtreprise($cli);

            $cl =$db->addCompte($compte);

        }
    }
    