<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    /**
     * @Route("/checkout")
     *
     * @return Response
     * @throws \Exception
     *
     * NOTE: path to this controller is http://localhost:8000/checkout
     */
    public function number()
    {
        return $this->render('checkout/checkout.html.twig', [
        ]);
    }
}
