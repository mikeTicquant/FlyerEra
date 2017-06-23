<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 07/06/2017
 * Time: 09:57
 */

namespace AppBundle\Controller\Nego;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/nego")
 */
class NegoController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('nego/index.html.twig');
    }
}