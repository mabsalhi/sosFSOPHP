<?php

namespace sosFSO\HrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\HrBundle\Entity\AffectationRepository")
 */
class Affectation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateAffectation", type="date")
     */
    private $dateAffectation;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=255)
     */
    private $poste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDetachement", nullable = true, type="date")
     */
    private $dateDetachement;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", nullable = true, type="text")
     */
    private $remarques;


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
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return Affectation
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;
    
        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Affectation
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set dateDetachement
     *
     * @param \DateTime $dateDetachement
     * @return Affectation
     */
    public function setDateDetachement($dateDetachement)
    {
        $this->dateDetachement = $dateDetachement;
    
        return $this;
    }

    /**
     * Get dateDetachement
     *
     * @return \DateTime 
     */
    public function getDateDetachement()
    {
        return $this->dateDetachement;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Affectation
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;
    
        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }
}
