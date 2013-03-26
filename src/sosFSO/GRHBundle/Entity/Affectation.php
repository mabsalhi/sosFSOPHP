<?php

namespace sosFSO\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\GRHBundle\Entity\AffectationRepository")
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
     * @ORM\Column(name="dateDetachement", type="date")
     */
    private $dateDetachement;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;

    /**
     * @ORM\OneToOne(targetEntity="Service", mappedBy="staff")
     **/
    private $service;    
    
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

    /**
     * Set service
     *
     * @param \sosFSO\GRHBundle\Entity\Service $service
     * @return Affectation
     */
    public function setService(\sosFSO\GRHBundle\Entity\Service $service = null)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return \sosFSO\GRHBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }
}