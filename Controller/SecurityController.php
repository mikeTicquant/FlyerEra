<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 04/05/2017
 * Time: 13:22
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('security/login.html.twig', [
            'lastUsername' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);

    }



    /**
     * After login
     *
     * @return RedirectResponse
     * @Route("/connexion/redirection")
     */
    public function afterLoginAction()
    {
        if ($this->isGranted('ROLE_NEGOCIATEUR')) {
            return $this->redirectToRoute('app_nego_nego_index');
        }

        if ($this->isGranted('ROLE_RESEAU')) {
            return $this->redirectToRoute('app_reseau_reseau_index');
        }

        return $this->redirectToRoute('app_user_user_profil');
    }


}