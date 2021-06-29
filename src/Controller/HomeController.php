<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        if(!$this->getUser())
        {
            $user = new User();
            $form = $this->createForm(RegistrationFormType::class, $user);
            return $this->render('home/index.html.twig', ['registrationForm' => $form->createView()]);
        }
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/user-only", name="user_only")
     */
    public function userOnly() : Response
    {
        return $this->render('user/index.html.twig');
    }

    /**
     * @Route ("/modal-form", name="modal_form")
     */
    public function modalForm() : Response
    {
        if(!$this->getUser())
        {
            $user = new User();
            $form = $this->createForm(RegistrationFormType::class, $user);
            return $this->render('home/modal_form.html.twig', ['registrationForm' => $form->createView()]);
        }
        return $this->render('home/modal_form.html.twig');
    }
}
