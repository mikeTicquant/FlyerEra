<?php

namespace AppBundle\Controller\Flyer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/flyer")
 */
class CreeController extends Controller
{
    /**
     * @Route("/cree")
     */
    public function indexAction()
    {
        
        return $this->render('flyer/creeFlyer.html.twig');
    }
}
