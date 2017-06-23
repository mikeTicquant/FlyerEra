<?php

namespace AppBundle\Controller\Flyer;

use AppBundle\Entity\Flyer;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;
use AppBundle\Entity\Modele;


/**
 * @Route("/flyer")
 */
class FlyerController extends Controller
{

    /**
     * @Route()
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository(Modele::class)->findBy([], ['name' => 'ASC']);
        return $this->render('flyer/index.html.twig', [
            'modeles' => $modeles,
        ]);
    }

    /**
     * @Route("/cree")
     */
    public function creerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository(Modele::class)->findBy([], ['name' => 'ASC']);
        return $this->render('flyer/creerFlyer.html.twig', [
            'modeles' => $modeles,
        ]);
    }


    /**
     * @Route("/add")
     */

    public function signup()
    {

        $flyer = new Flyer();

        $form = $this->createForm(UserType::class, $flyer);
        if ($form->handleRequest()->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($flyer);
            $em->flush();

            $this->addFlash('success', 'Inscription effectuée avec succes !');

            return $this->redirectToRoute('app_flyer_flyer_index ');
        }

        return $this->render('flyer/addFlyer.html.twig', [
            'form' => $form->createView(),
        ]);

    }
    public function modeleAction(){
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository(Modele::class)->findBy([], ['name' => 'ASC']);
        return $this->render('modele/index.html.twig', [
            'modeles' => $modeles,
        ]);

    }
}
