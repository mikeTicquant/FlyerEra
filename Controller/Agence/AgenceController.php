<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 14/06/2017
 * Time: 02:03
 */

namespace AppBundle\Controller\Agence;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/agence")
 */
class AgenceController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('agence/index.html.twig');
    }
}