<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Client")
 */
class Client 
{
     /**
     * @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    private $id;

     /** 
     * @ORM\Column(type="string") 
     */
    private $matricule;

     /** 
     * @ORM\Column(type="string") 
     */
    private $cni;

     /** 
     * @ORM\Column(type="string") 
     */
    private $nom;

     /** 
     * @ORM\Column(type="string") 
     */
    private $prenom;

     /** 
     * @ORM\Column(type="string") 
     */
    private $sexe;

     /** 
     * @ORM\Column(type="string") 
     */
    private $datenaiss;

     /** 
     * @ORM\Column(type="integer") 
     */
    private $tel;

     /** 
     * @ORM\Column(type="string") 
     */
    private $adresse;

     /** 
     * @ORM\Column(type="string") 
     */
    private $email;

     /** 
     * @ORM\Column(type="string") 
     */
    private $raison_sociale;

     /** 
     * @ORM\Column(type="integer") 
     */
    private $salaire;

     /** 
     * @ORM\Column(type="string") 
     */
    private $nom_employeur;

     /** 
     * @ORM\Column(type="string") 
     */
    private $adr_employeur;


    /**
     * One client has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="id_Client")
     */
    private $compte;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    } 
    
    public function getMat()
    {
        return $this->matricule;
    }

    public function setMat($matricule)
    {
        $this->matricule = $matricule;
    } 
    
    public function getCni()
    {
        return $this->cni;
    }

    public function setCni($cni)
    {
        $this->cni = $cni;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRaison_sociale()
    {
        return $this->raison_sociale;
    }

    public function setRaison_sociale($raison_sociale)
    {
        $this->raison_sociale = $raison_sociale;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getEmpl()
    {
        return $this->nom_employeur;
    }

    public function setEmpl($nom_employeur)
    {
        $this->nom_employeur = $nom_employeur;
    }

    public function getAdrEmpl()
    {
        return $this->adr_employeur;
    }

    public function setAdrEmpl($adr_employeur)
    {
        $this->adr_employeur = $adr_employeur;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getCompte()
    {
        return $this->compte;
    }

    public function setCompte($compte)
    {
        $this->compte = $compte;
    }
}
?>