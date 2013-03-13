<?php

namespace sosFSO\HrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\HrBundle\Entity\SituationRepository")
 */
class Situation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="echelon", type="integer")
     */
    private $echelon;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_inference", type="integer")
     */
    private $numeroInference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_effets", type="date")
     */
    private $dateEffets;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255)
     */
    private $remarques;
    
    /**
     * @ORM/ManyToOne(targetEntity="Cadre")
     * @JoinColumn(name="cadre_id", referencedColumnName="id")
     */
    private $cadre;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set echelon
     *
     * @param integer $echelon
     * @return Situation
     */
    public function setEchelon($echelon)
    {
        $this->echelon = $echelon;
    
        return $this;
    }

    /**
     * Get echelon
     *
     * @return integer 
     */
    public function getEchelon()
    {
        return $this->echelon;
    }

    /**
     * Set numeroInference
     *
     * @param integer $numeroInference
     * @return Situation
     */
    public function setNumeroInference($numeroInference)
    {
        $this->numeroInference = $numeroInference;
    
        return $this;
    }

    /**
     * Get numeroInference
     *
     * @return integer 
     */
    public function getNumeroInference()
    {
        return $this->numeroInference;
    }

    /**
     * Set dateEffets
     *
     * @param \DateTime $dateEffets
     * @return Situation
     */
    public function setDateEffets($dateEffets)
    {
        $this->dateEffets = $dateEffets;
    
        return $this;
    }

    /**
     * Get dateEffets
     *
     * @return \DateTime 
     */
    public function getDateEffets()
    {
        return $this->dateEffets;
    }

    /**
     * Set anciennete
     *
     * @param integer $anciennete
     * @return Situation
     */
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;
    
        return $this;
    }

    /**
     * Get anciennete
     *
     * @return integer 
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set personne
     *
     * @param \sosFSO\HrBundle\Entity\Personne $personne
     * @return Situation
     */
    public function setPersonne(\sosFSO\HrBundle\Entity\Personne $personne = null)
    {
        $this->personne = $personne;
    
        return $this;
    }

    /**
     * Get personne
     *
     * @return \sosFSO\HrBundle\Entity\Personne 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
    
    public function __toString() {
        return $this->getPersonne()->getSom();
    }
}