<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig');
    }

    #[Route('/reseau/normand', name: 'reseau_normand')]
    public function reseauNormand(): Response
    {
        return $this->render('reseau_normand.html.twig');
    }

    #[Route('/reseau/france', name: 'reseau_france')]
    public function reseauFrance(): Response
    {
        return $this->render('reseau_france.html.twig');
    }

    #[Route('/assoukr', name: 'asso_ukr')]
    public function assoUkr(): Response
    {
        return $this->render('association_ukr.html.twig');
    }

    #[Route('/helpmybaby', name: 'help_my_baby')]
        public function helpMyBaby(): Response
        {
            return $this->render('help_my_baby.html.twig');
        }

    #[Route('/pro', name: 'pro')]
        public function pro(): Response
        {
            return $this->render('professionnel.html.twig');
        }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        // $manager = $this->getDoctrine()->getManager();

        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($contact);
                $manager->flush();

                $this->addFlash('success', 'Merci ! Votre message a bien été envoyé.');

                return $this->redirectToRoute('homepage');
            } else {
                $this->addFlash('danger', 'Oups ! Une erreur est survenue. Votre messsage n\'a pas été envoyé. ');

                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render('contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
