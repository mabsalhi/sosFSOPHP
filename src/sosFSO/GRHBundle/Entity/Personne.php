<?php

namespace sosFSO\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sosFSO\GRHBundle\Entity\PersonneRepository")
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
     * @ORM\Column(name="nomAr", type="string", length=255)
     */
    private $nomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAr", type="string", length=255)
     */
    private $prenomAr;

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
     * @var integer
     *
     * @ORM\Column(name="posteBudgetaire", type="integer")
     */
    private $posteBudgetaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etatMatrimonial", type="string", length=255)
     */
    private $etatMatrimonial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbEnfants", type="integer")
     */
    private $nbEnfants;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="numTelephonne", type="integer")
     */
    private $numTelephonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRecrutement", type="date")
     */
    private $dateRecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob")
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity="Diplome")
     * @ORM\JoinTable(name="diplomes_personne",
     *      joinColumns={@ORM\JoinColumn(name="personne_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="diplome_id", referencedColumnName="id")}
     *      )
     **/
    private $diplomes;
    
    /**
     * @ORM\ManyToMany(targetEntity="situation")
     * @ORM\JoinTable(name="situations_personne",
     *      joinColumns={@ORM\JoinColumn(name="personne_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="situation_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $situations;

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
     * @return Personne
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
     * @return Personne
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
     * Set nomAr
     *
     * @param string $nomAr
     * @return Personne
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
     * @return Personne
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
     * Set cin
     *
     * @param string $cin
     * @return Personne
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
     * @return Personne
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
     * Set posteBudgetaire
     *
     * @param integer $posteBudgetaire
     * @return Personne
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Personne
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
     * @return Personne
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
     * @return Personne
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
     * Set sexe
     *
     * @param boolean $sexe
     * @return Personne
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nbEnfants
     *
     * @param integer $nbEnfants
     * @return Personne
     */
    public function setNbEnfants($nbEnfants)
    {
        $this->nbEnfants = $nbEnfants;
    
        return $this;
    }

    /**
     * Get nbEnfants
     *
     * @return integer 
     */
    public function getNbEnfants()
    {
        return $this->nbEnfants;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numTelephonne
     *
     * @param integer $numTelephonne
     * @return Personne
     */
    public function setNumTelephonne($numTelephonne)
    {
        $this->numTelephonne = $numTelephonne;
    
        return $this;
    }

    /**
     * Get numTelephonne
     *
     * @return integer 
     */
    public function getNumTelephonne()
    {
        return $this->numTelephonne;
    }

    /**
     * Set dateRecrutement
     *
     * @param \DateTime $dateRecrutement
     * @return Personne
     */
    public function setDateRecrutement($dateRecrutement)
    {
        $this->dateRecrutement = $dateRecrutement;
    
        return $this;
    }

    /**
     * Get dateRecrutement
     *
     * @return \DateTime 
     */
    public function getDateRecrutement()
    {
        return $this->dateRecrutement;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Personne
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->diplomes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->situations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add diplomes
     *
     * @param \sosFSO\GRHBundle\Entity\Diplome $diplomes
     * @return Personne
     */
    public function addDiplome(\sosFSO\GRHBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes[] = $diplomes;
    
        return $this;
    }

    /**
     * Remove diplomes
     *
     * @param \sosFSO\GRHBundle\Entity\Diplome $diplomes
     */
    public function removeDiplome(\sosFSO\GRHBundle\Entity\Diplome $diplomes)
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

    /**
     * Add situations
     *
     * @param \sosFSO\GRHBundle\Entity\situation $situations
     * @return Personne
     */
    public function addSituation(\sosFSO\GRHBundle\Entity\situation $situations)
    {
        $this->situations[] = $situations;
    
        return $this;
    }

    /**
     * Remove situations
     *
     * @param \sosFSO\GRHBundle\Entity\situation $situations
     */
    public function removeSituation(\sosFSO\GRHBundle\Entity\situation $situations)
    {
        $this->situations->removeElement($situations);
    }

    /**
     * Get situations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSituations()
    {
        return $this->situations;
    }
}