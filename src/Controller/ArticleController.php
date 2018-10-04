<?php

namespace App\Controller;

use App\Service\Greeting;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    private $greeting;

    public function __construct(Greeting $greeting){
        $this->greeting = $greeting;
    }

    /**
     * @Route("/")
     */
    public function index(Request $request)
    {
        return $this->render('base.html.twig', 
        ['message' =>
         $this->greeting->greet(
            $request->get('name')
        )
        ]);        
    }
}