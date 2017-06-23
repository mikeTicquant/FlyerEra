<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 14/06/2017
 * Time: 09:41
 */

namespace AppBundle\Controller\Cda;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/cda")
 */
class CdaController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('cda/index.html.twig');
    }
}