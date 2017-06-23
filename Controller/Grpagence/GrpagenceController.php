<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 14/06/2017
 * Time: 02:12
 */

namespace AppBundle\Controller\Grpagence;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/groupe")
 */
class GrpagenceController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('grpagence/index.html.twig');
    }


}