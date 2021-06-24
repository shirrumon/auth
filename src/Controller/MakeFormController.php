<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MakeFormController extends AbstractController
{
    /**
     * @Route("/make/form", name="make_form")
     */
    public function index(): Response
    {
        return $this->render('make_form/index.html.twig', [
            'controller_name' => 'MakeFormController',
        ]);
    }
}
