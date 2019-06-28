<?php

namespace App\Controller;

use App\Entity\Resto;
use App\Repository\RestoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function index()
    {
        return $this->render('restaurant/index.html.twig',[
        ]);
    }
}
