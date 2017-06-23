<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 19/06/2017
 * Time: 10:12
 */

namespace AppBundle\Controller\Modele;


use AppBundle\Entity\Modele;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 *@Route()
 */
//RECUPERATION DES DONNEES DU MODELE POUR LES AFFICHER DANS index.html.twig avec comme router modele
class ModeleController extends Controller
{
    /**
     *@Route("/modele")
     */
    public function IndexAction(){
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository(Modele::class)->findBy([], ['name' => 'ASC']);
        return $this->render('modele/index.html.twig', [
            'modeles' => $modeles,
        ]);

    }
    /**
     *@Route("/modeleFlyer")
     */
    public function modeleFlyerAction(){
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository(Modele::class)->findBy([], ['name' => 'ASC']);
        return $this->render('flyer/creeFlyer.html.twig', [
            'modeles' => $modeles,
        ]);

    }
}