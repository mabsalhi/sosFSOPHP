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
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="affectation")
     * @ORM\JoinColumn(name="personne_id", referencedColumnName="id")
     **/
    private $personne;
     
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
     * Constructor
     */
    public function __construct()
    {
        $this->service = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set personne
     *
     * @param \sosFSO\HrBundle\Entity\Personne $personne
     * @return Affectation
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

    /**
     * Add service
     *
     * @param \sosFSO\HrBundle\Entity\Service $service
     * @return Affectation
     */
    public function addService(\sosFSO\HrBundle\Entity\Service $service)
    {
        $this->service[] = $service;
    
        return $this;
    }

    /**
     * Remove service
     *
     * @param \sosFSO\HrBundle\Entity\Service $service
     */
    public function removeService(\sosFSO\HrBundle\Entity\Service $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getService()
    {
        return $this->service;
    }
}