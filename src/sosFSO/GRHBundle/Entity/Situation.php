<?php

namespace sosFSO\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\GRHBundle\Entity\SituationRepository")
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
     * @ORM\Column(name="numeroIndicatif", type="integer")
     */
    private $numeroIndicatif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEffet", type="date")
     */
    private $dateEffet;

    /**
     * @var float
     *
     * @ORM\Column(name="salaireEstimatif", type="float")
     */
    private $salaireEstimatif;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;

    /**
     * @ORM\ManyToOne(targetEntity="Cadre")
     * @ORM\JoinColumn(name="cadre_id", referencedColumnName="id")
     **/
    private $cadres;
    
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
     * Set numeroIndicatif
     *
     * @param integer $numeroIndicatif
     * @return Situation
     */
    public function setNumeroIndicatif($numeroIndicatif)
    {
        $this->numeroIndicatif = $numeroIndicatif;
    
        return $this;
    }

    /**
     * Get numeroIndicatif
     *
     * @return integer 
     */
    public function getNumeroIndicatif()
    {
        return $this->numeroIndicatif;
    }

    /**
     * Set dateEffet
     *
     * @param \DateTime $dateEffet
     * @return Situation
     */
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;
    
        return $this;
    }

    /**
     * Get dateEffet
     *
     * @return \DateTime 
     */
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    /**
     * Set salaireEstimatif
     *
     * @param float $salaireEstimatif
     * @return Situation
     */
    public function setSalaireEstimatif($salaireEstimatif)
    {
        $this->salaireEstimatif = $salaireEstimatif;
    
        return $this;
    }

    /**
     * Get salaireEstimatif
     *
     * @return float 
     */
    public function getSalaireEstimatif()
    {
        return $this->salaireEstimatif;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Situation
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
     * Set cadres
     *
     * @param \sosFSO\GRHBundle\Entity\Cadre $cadres
     * @return Situation
     */
    public function setCadres(\sosFSO\GRHBundle\Entity\Cadre $cadres = null)
    {
        $this->cadres = $cadres;
    
        return $this;
    }

    /**
     * Get cadres
     *
     * @return \sosFSO\GRHBundle\Entity\Cadre 
     */
    public function getCadres()
    {
        return $this->cadres;
    }
}