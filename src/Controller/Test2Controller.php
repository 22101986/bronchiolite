<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Test2Controller extends AbstractController
{
    #[Route('/test2', name: 'app_test2')]
    public function index(UsersRepository $users): Response
    {   
        $peoples = $users->findAll();
        $test2 = [];
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

        // return dd($test2);
        return $this->render('test2/index.html.twig', [
            'peoples' => $peoples,
        ]);
    }
}
