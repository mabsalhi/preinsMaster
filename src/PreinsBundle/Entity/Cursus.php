<?php

namespace PreinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cursus
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cursus
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
     * @ORM\Column(name="typeDiplome", type="string", length=255)
     */
    private $typeDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeObtention", type="date")
     */
    private $anneeObtention;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne", type="float")
     */
    private $moyenne;
    
    /**
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="cursuses")
     * @ORM\JoinColumn(name="Student_id", referencedColumnName="id")
     */
    protected $student;

    public function __construct() {
        $this->student = new ArrayCollection();
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
     * Set typeDiplome
     *
     * @param string $typeDiplome
     * @return Cursus
     */
    public function setTypeDiplome($typeDiplome)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }

    /**
     * Get typeDiplome
     *
     * @return string 
     */
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Cursus
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
     * Set etablissement
     *
     * @param string $etablissement
     * @return Cursus
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set anneeObtention
     *
     * @param \DateTime $anneeObtention
     * @return Cursus
     */
    public function setAnneeObtention($anneeObtention)
    {
        $this->anneeObtention = $anneeObtention;

        return $this;
    }

    /**
     * Get anneeObtention
     *
     * @return \DateTime 
     */
    public function getAnneeObtention()
    {
        return $this->anneeObtention;
    }

    /**
     * Set moyenne
     *
     * @param float $moyenne
     * @return Cursus
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return float 
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set student
     *
     * @param \PreinsBundle\Entity\Student $student
     * @return Cursus
     */
    public function setStudent(\PreinsBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \PreinsBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }
}
