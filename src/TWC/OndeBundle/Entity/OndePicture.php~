<?php

namespace TWC\OndeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OndePicture
 *
 * @ORM\Table(name="onde_picture")
 * @ORM\Entity(repositoryClass="TWC\OndeBundle\Repository\OndePictureRepository")
 */
class OndePicture
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
     * @ORM\ManyToOne(targetEntity="TWC\OndeBundle\Entity\OndeUser", inversedBy="picture", fetch="EAGER");
     * @ORM\JoinColumn(name="creator", referencedColumnName="id" ,nullable=true)
     */
    private $creator;


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
     * Set objectkey
     *
     * @param string $objectkey
     *
     * @return OndePicture
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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return OndePicture
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
     * Set alt
     *
     * @param string $alt
     *
     * @return OndePicture
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
     * Set creator
     *
     * @param \TWC\OndeBundle\Entity\OndeUser $creator
     *
     * @return OndePicture
     */
    public function setCreator(\TWC\OndeBundle\Entity\OndeUser $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \TWC\OndeBundle\Entity\OndeUser
     */
    public function getCreator()
    {
        return $this->creator;
    }
}
