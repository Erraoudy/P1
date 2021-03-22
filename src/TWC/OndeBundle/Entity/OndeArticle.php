<?php

namespace TWC\OndeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OndeArticle
 *
 * @ORM\Table(name="onde_article")
 * @ORM\Entity(repositoryClass="TWC\OndeBundle\Repository\OndeArticleRepository")
 */
class OndeArticle
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
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreAr;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=true)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="publication", type="string", length=255, nullable=true)
     */
    private $publication;

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
    * @ORM\OneToMany(targetEntity="TWC\OndeBundle\Entity\OndeImage", mappedBy="article", cascade={"all"});
    * @ORM\JoinColumn(nullable=true)
    */
    private $image;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TWC\OndeBundle\Entity\OndeCategories", inversedBy="article", fetch="EAGER");
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id" ,nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return OndeArticle
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
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return OndeArticle
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return OndeArticle
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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return OndeArticle
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set publication
     *
     * @param string $publication
     *
     * @return OndeArticle
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return string
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return OndeArticle
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
     * Constructor
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
        $this->status = "draft";
        $this->creationDate = new \DateTime('now');
        $this->updateDate = new \DateTime('tomorrow');
    }

    /**
     * Add image
     *
     * @param \Twc\OndeBundle\Entity\OndeImage $image
     *
     * @return OndeArticle
     */
    public function addImage(\Twc\OndeBundle\Entity\OndeImage $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Twc\OndeBundle\Entity\OndeImage $image
     */
    public function removeImage(\Twc\OndeBundle\Entity\OndeImage $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set category
     *
     * @param \Twc\OndeBundle\Entity\OndeCategories $category
     *
     * @return OndeArticle
     */
    public function setCategory(\Twc\OndeBundle\Entity\OndeCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Twc\OndeBundle\Entity\OndeCategories
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return OndeArticle
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
     * Set type
     *
     * @param string $type
     *
     * @return OndeArticle
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set titreAr
     *
     * @param string $titreAr
     *
     * @return OndeArticle
     */
    public function setTitreAr($titreAr)
    {
        $this->titreAr = $titreAr;

        return $this;
    }

    /**
     * Get titreAr
     *
     * @return string
     */
    public function getTitreAr()
    {
        return $this->titreAr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     *
     * @return OndeArticle
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }

    /**
     * Set contenuAr
     *
     * @param string $contenuAr
     *
     * @return OndeArticle
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
     * @return OndeArticle
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
}
