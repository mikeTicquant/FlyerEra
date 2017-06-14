<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/06/2017
 * Time: 09:40
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity()
 * @ORM\Table(name="flyer")
 */

class Flyer
{
    use IdTrait;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $name;




    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $create_date;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $public;


    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $partage;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $format;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $paper_type;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $resolution;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $grammage;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $recto_verso;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param mixed $create_date
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;
    }

    /**
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param mixed $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return mixed
     */
    public function getPartage()
    {
        return $this->partage;
    }

    /**
     * @param mixed $partage
     */
    public function setPartage($partage)
    {
        $this->partage = $partage;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getPaperType()
    {
        return $this->paper_type;
    }

    /**
     * @param mixed $paper_type
     */
    public function setPaperType($paper_type)
    {
        $this->paper_type = $paper_type;
    }

    /**
     * @return mixed
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * @param mixed $resolution
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return mixed
     */
    public function getGrammage()
    {
        return $this->grammage;
    }

    /**
     * @param mixed $grammage
     */
    public function setGrammage($grammage)
    {
        $this->grammage = $grammage;
    }

    /**
     * @return mixed
     */
    public function getRectoVerso()
    {
        return $this->recto_verso;
    }

    /**
     * @param mixed $recto_verso
     */
    public function setRectoVerso($recto_verso)
    {
        $this->recto_verso = $recto_verso;
    }


}