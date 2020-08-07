<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="typeCompte")
 */
class TypeCompte
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
    private $libelle;

    /**
     * One typeCompte has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="typeCompte")
     */
    private $numero;

    public function __construct()
    {
        $this->numero = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    } 

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    } 
}