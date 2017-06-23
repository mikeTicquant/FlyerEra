<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 14/06/2017
 * Time: 02:08
 */

namespace AppBundle\Controller\Reseau;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/reseau")
 */
class ReseauController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('reseau/index.html.twig');
    }

}