<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\ArchivingType;
use App\Repository\ArchivingRepository;
use Doctrine\Persistence\ManagerRegistry;
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

    #[Route('/acount', name: 'my_account')]
        public function account(Request $request): Response
        {   
            $form = $this->createForm(UserType::class);
            $form->handleRequest($request);

            return $this->render('my_account.html.twig', [
                'form' => $form->createView(),
            ]);
        }    

    #[Route('/adhesion/archivage', name: 'adhesion_archivage')]
            
        public function adhesion(Request $request, ArchivingRepository $archiving): Response
        {  
            $archiving = $archiving->findAll();
            $form = $this->createForm(ArchivingType::class);
            $form->handleRequest($request);


            return $this->render('adhesion_archivage.html.twig', [
                'archiving' => $archiving,
                'form' => $form->createView(),
            ]);
        }

        #[Route('/login', name: 'app_login')]
        public function login(AuthenticationUtils $authenticationUtils): Response
        {   
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
    
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();
    
            return $this->render('login/index.html.twig', [
                'last_username' => $lastUsername,
                'error'=> $error,
            ]);
        }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request, ManagerRegistry $doctrine): Response
    {
        // $manager = $this->getDoctrine()->getManager();

        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $doctrine->getManager();
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
