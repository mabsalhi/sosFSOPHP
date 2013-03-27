<?php

namespace sosFSO\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\GRHBundle\Entity\ServiceRepository")
 */
class Service
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
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

     /**
     * @ORM\OneToMany(targetEntity="Affectation", mappedBy="service")
     **/
    private $membres;
    
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
     * Set intitule
     *
     * @param string $intitule
     * @return Service
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Service
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set membre
     *
     * @param \sosFSO\GRHBundle\Entity\Affectation $membre
     * @return Service
     */
    public function setMembre(\sosFSO\GRHBundle\Entity\Affectation $membre = null)
    {
        $this->membre = $membre;
    
        return $this;
    }

    /**
     * Get membre
     *
     * @return \sosFSO\GRHBundle\Entity\Affectation 
     */
    public function getMembre()
    {
        return $this->membre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add membres
     *
     * @param \sosFSO\GRHBundle\Entity\Affectation $membres
     * @return Service
     */
    public function addMembre(\sosFSO\GRHBundle\Entity\Affectation $membres)
    {
        $this->membres[] = $membres;
    
        return $this;
    }

    /**
     * Remove membres
     *
     * @param \sosFSO\GRHBundle\Entity\Affectation $membres
     */
    public function removeMembre(\sosFSO\GRHBundle\Entity\Affectation $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}