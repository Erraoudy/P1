<?php

namespace TWC\OndeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OndeMedia
 *
 * @ORM\Table(name="onde_media")
 * @ORM\Entity(repositoryClass="TWC\OndeBundle\Repository\OndeMediaRepository")
 */
class OndeMedia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column( type="string", length=255, nullable=true)
     */
    private $titleAr;
    /**
     * @var string
     *
     * @ORM\Column( type="string", length=255, nullable=true)
     */
    private $titleEn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $fileName;
    /**
     * @var string
     *
     * @ORM\Column(name="filename_en", type="string", length=255, nullable=true)
     */
    private $fileNameEn;
    /**
     * @var string
     *
     * @ORM\Column(name="filename_ar", type="string", length=255, nullable=true)
     */
    private $fileNameAr;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    private $status;

    /**
     * @var text
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;
    /**
     * @var text
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenuAr;
    /**
     * @var text
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenuEn;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TWC\OndeBundle\Entity\OndeUser", inversedBy="media", fetch="EAGER");
     * @ORM\JoinColumn(name="creator", referencedColumnName="id" ,nullable=true)
     */
    private $creator;

    /**
     * Constructor
     */
    public function __construct()
    {

        $this->status = "draft";
        $this->creationDate = new \DateTime('now');
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return OndeMedia
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return OndeMedia
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return OndeMedia
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return OndeMedia
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set creator
     *
     * @param \TWCOndeBundle\Entity\OndeUser $creator
     *
     * @return OndeMedia
     */
    public function setCreator(\TWCOndeBundle\Entity\OndeUser $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \TWCOndeBundle\Entity\OndeUser
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return OndeMedia
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return OndeMedia
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return OndeMedia
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set titleAr
     *
     * @param string $titleAr
     *
     * @return OndeMedia
     */
    public function setTitleAr($titleAr)
    {
        $this->titleAr = $titleAr;

        return $this;
    }

    /**
     * Get titleAr
     *
     * @return string
     */
    public function getTitleAr()
    {
        return $this->titleAr;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return OndeMedia
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set contenuAr
     *
     * @param string $contenuAr
     *
     * @return OndeMedia
     */
    public function setContenuAr($contenuAr)
    {
        $this->contenuAr = $contenuAr;

        return $this;
    }

    /**
     * Get contenuAr
     *
     * @return string
     */
    public function getContenuAr()
    {
        return $this->contenuAr;
    }

    /**
     * Set contenuEn
     *
     * @param string $contenuEn
     *
     * @return OndeMedia
     */
    public function setContenuEn($contenuEn)
    {
        $this->contenuEn = $contenuEn;

        return $this;
    }

    /**
     * Get contenuEn
     *
     * @return string
     */
    public function getContenuEn()
    {
        return $this->contenuEn;
    }

    /**
     * Set fileNameEn
     *
     * @param string $fileNameEn
     *
     * @return OndeMedia
     */
    public function setFileNameEn($fileNameEn)
    {
        $this->fileNameEn = $fileNameEn;

        return $this;
    }

    /**
     * Get fileNameEn
     *
     * @return string
     */
    public function getFileNameEn()
    {
        return $this->fileNameEn;
    }

    /**
     * Set fileNameAr
     *
     * @param string $fileNameAr
     *
     * @return OndeMedia
     */
    public function setFileNameAr($fileNameAr)
    {
        $this->fileNameAr = $fileNameAr;

        return $this;
    }

    /**
     * Get fileNameAr
     *
     * @return string
     */
    public function getFileNameAr()
    {
        return $this->fileNameAr;
    }
}