<?php

namespace sosFSO\HrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cadre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\HrBundle\Entity\CadreRepository")
 */
class Cadre {

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
     * @var integer
     *
     * @ORM\Column(name="echelle", type="integer")
     */
    private $echelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

   

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Cadre
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Set echelle
     *
     * @param integer $echelle
     * @return Cadre
     */
    public function setEchelle($echelle) {
        $this->echelle = $echelle;

        return $this;
    }

    /**
     * Get echelle
     *
     * @return integer 
     */
    public function getEchelle() {
        return $this->echelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Cadre
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set personnes
     *
     * @param \sosFSO\HrBundle\Entity\Personne $personnes
     * @return Cadre
     */
    public function setPersonnes(\sosFSO\HrBundle\Entity\Personne $personnes) {
        $this->personnes = $personnes;

        return $this;
    }

    /**
     * Get personnes
     *
     * @return \sosFSO\HrBundle\Entity\Personne 
     */
    public function getPersonnes() {
        return $this->personnes;
    }

    public function __toString() {
        return $this->getIntitule();
    }

}