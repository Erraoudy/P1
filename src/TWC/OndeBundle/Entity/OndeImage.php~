<?php

namespace TWC\OndeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OndeImage
 *
 * @ORM\Table(name="onde_image")
 * @ORM\Entity(repositoryClass="TWC\OndeBundle\Repository\OndeImageRepository")
 */
class OndeImage
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
     * @ORM\Column(name="objectkey", type="string", length=255, nullable=true)
     */
    private $objectkey;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TWC\OndeBundle\Entity\OndeArticle", inversedBy="image")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id" ,nullable=false)
     */
    private $article;


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
     * Set objectkey
     *
     * @param string $objectkey
     *
     * @return OndeImage
     */
    public function setObjectkey($objectkey)
    {
        $this->objectkey = $objectkey;

        return $this;
    }

    /**
     * Get objectkey
     *
     * @return string
     */
    public function getObjectkey()
    {
        return $this->objectkey;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return OndeImage
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return OndeImage
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set article
     *
     * @param \Twc\OndeBundle\Entity\OndeArticle $article
     *
     * @return OndeImage
     */
    public function setArticle(\Twc\OndeBundle\Entity\OndeArticle $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Twc\OndeBundle\Entity\OndeArticle
     */
    public function getArticle()
    {
        return $this->article;
    }
}
