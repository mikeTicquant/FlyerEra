<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/06/2017
 * Time: 10:03
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity()
 * @ORM\Table(name="cartouche_conseiller")
 */
class CartoucheConseiller
{

    use IdTrait;



    /**
     * @var null|UploadedFile
     * @Assert\Image()
     */
    private $logo;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $civility;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $firstname;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $lastname;


    /**²
     * @ORM\Column(nullable=true)
     *  @Assert\Length(min = 10, max = 10, minMessage = "min_lenght", maxMessage = "max_lenght")
     *  @Assert\Regex(pattern="#^0[1-9]([-. ]?[0-9]{2}){4}$#", message="number_only")
     */
    private $phone;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $company_name;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $address;



    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $postal_code;



    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $city;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $status;



    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $public_message;


    /**
     * @var null|UploadedFile
     * @Assert\Image()
     */
    private $profile_photo;

    /**
     * @return null|UploadedFile
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param null|UploadedFile $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @param mixed $civility
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPublicMessage()
    {
        return $this->public_message;
    }

    /**
     * @param mixed $public_message
     */
    public function setPublicMessage($public_message)
    {
        $this->public_message = $public_message;
    }

    /**
     * @return null|UploadedFile
     */
    public function getProfilePhoto()
    {
        return $this->profile_photo;
    }

    /**
     * @param null|UploadedFile $profile_photo
     */
    public function setProfilePhoto($profile_photo)
    {
        $this->profile_photo = $profile_photo;
    }



}