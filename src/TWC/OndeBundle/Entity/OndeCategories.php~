<?php

namespace TWC\OndeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OndeCategories
 *
 * @ORM\Table(name="onde_categories")
 * @ORM\Entity(repositoryClass="TWC\OndeBundle\Repository\OndeCategoriesRepository")
 */
class OndeCategories
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
    * @ORM\OneToMany(targetEntity="TWC\OndeBundle\Entity\OndeArticle", mappedBy="category")
    * @ORM\JoinColumn(nullable=true)
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
     * Set name
     *
     * @param string $name
     *
     * @return OndeCategories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OndeCategories
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
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \Twc\OndeBundle\Entity\OndeArticle $article
     *
     * @return OndeCategories
     */
    public function addArticle(\Twc\OndeBundle\Entity\OndeArticle $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Twc\OndeBundle\Entity\OndeArticle $article
     */
    public function removeArticle(\Twc\OndeBundle\Entity\OndeArticle $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
}
