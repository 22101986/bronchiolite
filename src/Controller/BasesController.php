<?php

namespace App\Controller;

use doctrine;
use App\Entity\Contact;
use App\Repository\UsersRepository;
use App\Repository\ContactRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BasesController extends AbstractController
{
    #[Route('/bases', name: 'app_bases')]
    public function index(ManagerRegistry $doctrine, ContactRepository $contact, UsersRepository $users): Response
    {   
        $test = [];
        $datas = $contact->findAll();
        foreach($datas as $data){

            $lastname = $data->getLastname();
            $firstname = $data->getFirstname();
            $email = $data->getEmail();
            $message = $data->getMessage();
            
            $identity = [$lastname, $firstname,$email,$message];
            array_push($test, $identity);

        }

        $test2 =  [];

        $peoples = $users->findAll();
        foreach($peoples as $people){

            $lastname = $people->getLastname();
            $firstname = $people->getFirstname();
            $email = $people->getEmail();
            $username = $people->getUsername();
            $password = $people->getPassword();
            $iban =$people->getIban();
            
            $pers = [$lastname, $firstname,$email,$username,$password, $iban];
            array_push($test2, $pers);

        }


        // $bases = $doctrine->getRepository(ContactRepository::class)->findAll();
        // $data = $bases->getLastname();
        
        // return dd($test2);
        
        return $this->render('bases/index.html.twig', [
            'controller_name' => 'BasesController',
        ]);
    }
}
