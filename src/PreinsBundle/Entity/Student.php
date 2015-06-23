<?php

namespace PreinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PreinsBundle\Entity\StudentRepository")
 */
class Student
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
     * @ORM\Column(name="cne", type="integer")
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=15)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=150)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNiassance", type="string", length=100)
     */
    private $lieuNiassance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=100)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="numTelephonne", type="bigint")
     */
    private $numTelephonne;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s1", type="float")
     */
    private $noteS1;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_s2", type="float")
     */
    private $noteS2;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_s3", type="float")
     */
    private $noteS3;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_s4", type="float")
     */
    private $noteS4;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_s5", type="float")
     */
    private $noteS5;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_s6", type="float")
     */
    private $noteS6;
    
    /**
     * @var float
     *
     * @ORM\Column(name="note_bac", type="float")
     */
    private $noteBac;
    
    /**
     * @ORM\OneToMany(targetEntity="Cursus", mappedBy="student")
     */
    protected $cursuses;
    
    /**
     * @ORM\OneToMany(targetEntity="Pieces", mappedBy="student")
     */
    protected $pieces;

    public function __construct() {
        $this->cursuses = new ArrayCollection();
        $this->pieces = new ArrayCollection();
    }
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
     * Set cne
     *
     * @param integer $cne
     * @return Student
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return integer 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Student
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
     * Set nom
     *
     * @param string $nom
     * @return Student
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
     * @return Student
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Student
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
     * Set lieuNiassance
     *
     * @param string $lieuNiassance
     * @return Student
     */
    public function setLieuNiassance($lieuNiassance)
    {
        $this->lieuNiassance = $lieuNiassance;

        return $this;
    }

    /**
     * Get lieuNiassance
     *
     * @return string 
     */
    public function getLieuNiassance()
    {
        return $this->lieuNiassance;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Student
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Student
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Student
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
     * @return Student
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
     * Add cursuses
     *
     * @param \PreinsBundle\Entity\Cursus $cursuses
     * @return Student
     */
    public function addCursus(\PreinsBundle\Entity\Cursus $cursuses)
    {
        $this->cursuses[] = $cursuses;

        return $this;
    }

    /**
     * Remove cursuses
     *
     * @param \PreinsBundle\Entity\Cursus $cursuses
     */
    public function removeCursus(\PreinsBundle\Entity\Cursus $cursuses)
    {
        $this->cursuses->removeElement($cursuses);
    }

    /**
     * Get cursuses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursuses()
    {
        return $this->cursuses;
    }

    /**
     * Add pieces
     *
     * @param \PreinsBundle\Entity\Pieces $pieces
     * @return Student
     */
    public function addPiece(\PreinsBundle\Entity\Pieces $pieces)
    {
        $this->pieces[] = $pieces;

        return $this;
    }

    /**
     * Remove pieces
     *
     * @param \PreinsBundle\Entity\Pieces $pieces
     */
    public function removePiece(\PreinsBundle\Entity\Pieces $pieces)
    {
        $this->pieces->removeElement($pieces);
    }

    /**
     * Get pieces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Set noteS1
     *
     * @param \float $noteS1
     * @return Student
     */
    public function setNoteS1(\float $noteS1)
    {
        $this->noteS1 = $noteS1;

        return $this;
    }

    /**
     * Get noteS1
     *
     * @return \float 
     */
    public function getNoteS1()
    {
        return $this->noteS1;
    }

    /**
     * Set noteS2
     *
     * @param \float $noteS2
     * @return Student
     */
    public function setNoteS2(\float $noteS2)
    {
        $this->noteS2 = $noteS2;

        return $this;
    }

    /**
     * Get noteS2
     *
     * @return \float 
     */
    public function getNoteS2()
    {
        return $this->noteS2;
    }

    /**
     * Set noteS3
     *
     * @param \float $noteS3
     * @return Student
     */
    public function setNoteS3(\float $noteS3)
    {
        $this->noteS3 = $noteS3;

        return $this;
    }

    /**
     * Get noteS3
     *
     * @return \float 
     */
    public function getNoteS3()
    {
        return $this->noteS3;
    }

    /**
     * Set noteS4
     *
     * @param \float $noteS4
     * @return Student
     */
    public function setNoteS4(\float $noteS4)
    {
        $this->noteS4 = $noteS4;

        return $this;
    }

    /**
     * Get noteS4
     *
     * @return \float 
     */
    public function getNoteS4()
    {
        return $this->noteS4;
    }

    /**
     * Set noteS5
     *
     * @param \float $noteS5
     * @return Student
     */
    public function setNoteS5(\float $noteS5)
    {
        $this->noteS5 = $noteS5;

        return $this;
    }

    /**
     * Get noteS5
     *
     * @return \float 
     */
    public function getNoteS5()
    {
        return $this->noteS5;
    }

    /**
     * Set noteS6
     *
     * @param \float $noteS6
     * @return Student
     */
    public function setNoteS6(\float $noteS6)
    {
        $this->noteS6 = $noteS6;

        return $this;
    }

    /**
     * Get noteS6
     *
     * @return \float 
     */
    public function getNoteS6()
    {
        return $this->noteS6;
    }

    /**
     * Set noteBac
     *
     * @param \float $noteBac
     * @return Student
     */
    public function setNoteBac(\float $noteBac)
    {
        $this->noteBac = $noteBac;

        return $this;
    }

    /**
     * Get noteBac
     *
     * @return \float 
     */
    public function getNoteBac()
    {
        return $this->noteBac;
    }
}
