<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 06/06/2017
 * Time: 14:52
 */

namespace AppBundle\Controller\User;


use AppBundle\Entity\Role;
use AppBundle\Entity\User;
use AppBundle\Form\UserDetailsType;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * @Route("/user")
 */
class UserController extends Controller
{


    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('user/index.html.twig');

    }


    /**
     * @return RedirectResponse|Response
     * @Route("/add")
     */
   public function signupAction(Request $request)
   {

       $user = new User();


       $form = $this->createForm(UserType::class, $user);
       if ($form->handleRequest($request)->isValid()) {

           $user->setCreatedAt(new \DateTime());
           $user->setUpdateAt(new \DateTime());

           // On enregistre l'utilisateur en base de données
           $em = $this->getDoctrine()->getManager();
           $em->persist($user);
           $em->flush();

           $this->addFlash('success', 'Inscription effectuée avec succes !');

           // @todo On connecte l'utilisateur automatiquement
           $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
           $this->get('security.token_storage')->setToken($token);
           $this->get('session')->set('_security_main', serialize($token));

           return $this->redirectToRoute('app_user_user_profil');
       }

       //return $this->render('user/signup.html.twig', [
       return $this->render('default/register.html.twig', [
           'form' => $form->createView(),
       ]);

   }


    /**
     * @Route("/profil")
     */
   public function profilAction(Request $request)
   {
       $user = $this->getUser();

       $formDetails = $this->createForm(UserDetailsType::class, $user);
       if ($formDetails->handleRequest($request)->isValid()) {
           $this->getDoctrine()->getManager()->flush();

           return $this->redirectToRoute('app_user_user_index');
       }

        return $this->render('user/profile.html.twig',[
            'formDetails' => $formDetails->createView()
        ]);
   }

}