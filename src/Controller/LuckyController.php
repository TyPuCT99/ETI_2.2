<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/moja_liczba")
     *
     * @return Response
     * @throws \Exception
     */
    public function number(Request $req, string $name): Response
    {
        $number = random_int(0, 100);
        $useName = "Test";
        return $this->render('lucky/number.html.twig', [
            'mojaLiczba' => $number,
            'myName' => $useName

        ]);
    }
    public function login()
    {
        return $this->render('login.html.twig');
    }
}