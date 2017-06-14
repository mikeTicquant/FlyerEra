<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/06/2017
 * Time: 10:16
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity()
 * @ORM\Table(name="cartouche_agence")
 */
class CartoucheAgence
{

    use IdTrait;


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
    private $name_agence;



    /**²
     * @ORM\Column(nullable=true)
     *  @Assert\Length(min = 10, max = 10, minMessage = "min_lenght", maxMessage = "max_lenght")
     *  @Assert\Regex(pattern="#^0[1-9]([-. ]?[0-9]{2}){4}$#", message="number_only")
     */
    private $phone_number;


    /**²
     * @ORM\Column(nullable=true)
     *  @Assert\Length(min = 10, max = 10, minMessage = "min_lenght", maxMessage = "max_lenght")
     *  @Assert\Regex(pattern="#^0[1-9]([-. ]?[0-9]{2}){4}$#", message="number_only")
     */
    private $fax;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $website;

    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $rcs;



    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $naf;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $transaction_card;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $socaf;


    /**
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $montant_couverture;

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
    public function getNameAgence()
    {
        return $this->name_agence;
    }

    /**
     * @param mixed $name_agence
     */
    public function setNameAgence($name_agence)
    {
        $this->name_agence = $name_agence;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getRcs()
    {
        return $this->rcs;
    }

    /**
     * @param mixed $rcs
     */
    public function setRcs($rcs)
    {
        $this->rcs = $rcs;
    }

    /**
     * @return mixed
     */
    public function getNaf()
    {
        return $this->naf;
    }

    /**
     * @param mixed $naf
     */
    public function setNaf($naf)
    {
        $this->naf = $naf;
    }

    /**
     * @return mixed
     */
    public function getTransactionCard()
    {
        return $this->transaction_card;
    }

    /**
     * @param mixed $transaction_card
     */
    public function setTransactionCard($transaction_card)
    {
        $this->transaction_card = $transaction_card;
    }

    /**
     * @return mixed
     */
    public function getSocaf()
    {
        return $this->socaf;
    }

    /**
     * @param mixed $socaf
     */
    public function setSocaf($socaf)
    {
        $this->socaf = $socaf;
    }

    /**
     * @return mixed
     */
    public function getMontantCouverture()
    {
        return $this->montant_couverture;
    }

    /**
     * @param mixed $montant_couverture
     */
    public function setMontantCouverture($montant_couverture)
    {
        $this->montant_couverture = $montant_couverture;
    }



}