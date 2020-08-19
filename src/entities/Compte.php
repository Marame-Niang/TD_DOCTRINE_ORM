<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Compte")
 */

class Compte 
{
     /**
     * @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    private $id;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $numero;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $rib;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $solde;

    /** 
     * @ORM\Column(type="string") 
     */
    private $dateOuve;

    /** 
     * @ORM\Column(type="string") 
     */
    private $fraisOuv;

    /** 
     * @ORM\Column(type="integer", nullable=true) 
     */
    private $remuneration;
 
    /** 
     * @ORM\Column(type="string") 
     */
    private $date_debut;

    /** 
     * @ORM\Column(type="string") 
     */
    private $date_fin;

    /** 
     * @ORM\Column(type="string") 
     */
    private $agios;

    /**
     * Many compte have one client. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $id_Client;

    /**
     * Many compte have one entreprise. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="comptes")
     * @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $id_entreprise;

    /**
     * Many compte have one typeCompte. This is the owning side.
     * @ORM\ManyToOne(targetEntity="TypeCompte", inversedBy="compte")
     * @ORM\JoinColumn(name="typeCompte_id", referencedColumnName="id")
     */
    private $typeCompte;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
 

    public function getRib()
    {
        return $this->rib;
    }

    public function setRib($rib)
    {
        $this->rib = $rib;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    public function getDateOuve()
    {
        return $this->dateOuve;
    }

    public function setdateOuve($dateOuve)
    {
        $this->dateOuve = $dateOuve;
    }

    public function getFraisOuv()
    {
        return $this->fraisOuv;
    }

    public function setFraisOuv($fraisOuv)
    {
        $this->fraisOuv = $fraisOuv;
    }

    public function getDate_debut()
    {
        return $this->date_debut;
    }

    public function setDate_debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    public function getDate_fin()
    {
        return $this->date_fin;
    }

    public function setDate_fin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    public function getAgios()
    {
        return $this->agios;
    }

    public function setAgios($agios)
    {
        $this->agios = $agios;
    }

    public function getRemuneration()
    {
        return $this->remuneration;
    }

    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;
    }

    public function getId_Client()
    {
        return $this->id_Client;
    }

    public function setId_Client($id_Client)
    {
        $this->id_Client = $id_Client;
    }

    public function getIdEtreprise()
    {
        return $this->id_entreprise;
    }

    public function setIdEntreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }
    

}
?>