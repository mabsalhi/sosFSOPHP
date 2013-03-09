<?php

namespace sosFSO\HrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\HrBundle\Entity\PersonRepository")
 */
class Personne
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom2", type="string", length=255)
     */
    private $prenom2;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255)
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="som", type="integer")
     */
    private $som;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ar", type="string", length=255)
     */
    private $nomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_ar", type="string", length=255)
     */
    private $prenomAr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_matrimonial", type="string", length=255)
     */
    private $etatMatrimonial;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephonne", type="integer")
     */
    private $telephonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="poste_budgetaire", type="integer")
     */
    private $posteBudgetaire;

    
    /**
     * @ORM\OneToMany(targetEntity="sosFSO\HrBundle\Entity\Cadre", mappedBy="personnes")
     */
    private $cadre;
    
    /**
     * @ORM\ManyToMany(targetEntity="sosFSO\HrBundle\Entity\Service", inversedBy="staff")
     */
    private $affectation;

     /**
     * @ORM\ManyToMany(targetEntity="sosFSO\HrBundle\Entity\Diplome")
     */
    private $diplomes;

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
     * Set nom
     *
     * @param string $nom
     * @return Person
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Person
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom2
     *
     * @param string $prenom2
     * @return Person
     */
    public function setPrenom2($prenom2)
    {
        $this->prenom2 = $prenom2;
    
        return $this;
    }

    /**
     * Get prenom2
     *
     * @return string 
     */
    public function getPrenom2()
    {
        return $this->prenom2;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Person
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set som
     *
     * @param integer $som
     * @return Person
     */
    public function setSom($som)
    {
        $this->som = $som;
    
        return $this;
    }

    /**
     * Get som
     *
     * @return integer 
     */
    public function getSom()
    {
        return $this->som;
    }

    /**
     * Set nomAr
     *
     * @param string $nomAr
     * @return Person
     */
    public function setNomAr($nomAr)
    {
        $this->nomAr = $nomAr;
    
        return $this;
    }

    /**
     * Get nomAr
     *
     * @return string 
     */
    public function getNomAr()
    {
        return $this->nomAr;
    }

    /**
     * Set prenomAr
     *
     * @param string $prenomAr
     * @return Person
     */
    public function setPrenomAr($prenomAr)
    {
        $this->prenomAr = $prenomAr;
    
        return $this;
    }

    /**
     * Get prenomAr
     *
     * @return string 
     */
    public function getPrenomAr()
    {
        return $this->prenomAr;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Person
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     * @return Person
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;
    
        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set etatMatrimonial
     *
     * @param string $etatMatrimonial
     * @return Person
     */
    public function setEtatMatrimonial($etatMatrimonial)
    {
        $this->etatMatrimonial = $etatMatrimonial;
    
        return $this;
    }

    /**
     * Get etatMatrimonial
     *
     * @return string 
     */
    public function getEtatMatrimonial()
    {
        return $this->etatMatrimonial;
    }

    /**
     * Set telephonne
     *
     * @param integer $telephonne
     * @return Person
     */
    public function setTelephonne($telephonne)
    {
        $this->telephonne = $telephonne;
    
        return $this;
    }

    /**
     * Get telephonne
     *
     * @return integer 
     */
    public function getTelephonne()
    {
        return $this->telephonne;
    }

    /**
     * Set posteBudgetaire
     *
     * @param integer $posteBudgetaire
     * @return Person
     */
    public function setPosteBudgetaire($posteBudgetaire)
    {
        $this->posteBudgetaire = $posteBudgetaire;
    
        return $this;
    }

    /**
     * Get posteBudgetaire
     *
     * @return integer 
     */
    public function getPosteBudgetaire()
    {
        return $this->posteBudgetaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cadre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affectation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->diplomes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cadre
     *
     * @param \sosFSO\HrBundle\Entity\Cadre $cadre
     * @return Personne
     */
    public function addCadre(\sosFSO\HrBundle\Entity\Cadre $cadre)
    {
        $this->cadre[] = $cadre;
    
        return $this;
    }

    /**
     * Remove cadre
     *
     * @param \sosFSO\HrBundle\Entity\Cadre $cadre
     */
    public function removeCadre(\sosFSO\HrBundle\Entity\Cadre $cadre)
    {
        $this->cadre->removeElement($cadre);
    }

    /**
     * Get cadre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCadre()
    {
        return $this->cadre;
    }

    /**
     * Add affectation
     *
     * @param \sosFSO\HrBundle\Entity\Service $affectation
     * @return Personne
     */
    public function addAffectation(\sosFSO\HrBundle\Entity\Service $affectation)
    {
        $this->affectation[] = $affectation;
    
        return $this;
    }

    /**
     * Remove affectation
     *
     * @param \sosFSO\HrBundle\Entity\Service $affectation
     */
    public function removeAffectation(\sosFSO\HrBundle\Entity\Service $affectation)
    {
        $this->affectation->removeElement($affectation);
    }

    /**
     * Get affectation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffectation()
    {
        return $this->affectation;
    }

    /**
     * Add diplomes
     *
     * @param \sosFSO\HrBundle\Entity\Diplome $diplomes
     * @return Personne
     */
    public function addDiplome(\sosFSO\HrBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes[] = $diplomes;
    
        return $this;
    }

    /**
     * Remove diplomes
     *
     * @param \sosFSO\HrBundle\Entity\Diplome $diplomes
     */
    public function removeDiplome(\sosFSO\HrBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes->removeElement($diplomes);
    }

    /**
     * Get diplomes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiplomes()
    {
        return $this->diplomes;
    }
}