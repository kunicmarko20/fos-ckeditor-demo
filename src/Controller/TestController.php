<?php

namespace App\Controller;

use App\Form\TestForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('index.html.twig', [
            'form' => $this->createForm(TestForm::class)->createView()
        ]);
    }
}
