<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    private array $messages = [
        "Ahmed", "Amin", "Faouzi"
        ];
        #[Route('/', name: 'app_index')]
        public function index():Response
        {
            // redirect  to anouther route author
            return $this->redirectToRoute('app_author_index');

        }
    
}
