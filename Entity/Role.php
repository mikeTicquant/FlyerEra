<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 07/06/2017
 * Time: 14:07
 */

namespace AppBundle\Entity;


use AppBundle\Controller\Role\RoleController;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class Role extends RoleController
{

    use IdTrait;

    /**
     * @ORM\Column(unique=true)
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $name;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}