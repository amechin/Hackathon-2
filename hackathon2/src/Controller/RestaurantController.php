<?php

namespace App\Controller;

use App\Entity\Resto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundel\FrameworkBundle\Controller\Controller;


class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function index()
    {
        return $this->render('restaurant/index.html.twig');
    }


    /**
     * @Route("/restaurant/{name<^[a-zA-Z0-9-]+$>}", defaults={"name" = null},
     *  name="showRestaurantByName")
     * @return Response
     **/
    public function showRestaurantByName($name)
    {
        $restaurant = $this->getDoctrine()->getRepository(Resto::class)
            ->findOneBy(['Name'=>$name]);
        if(!$restaurant) {
            throw $this
                ->createNotFoundException('No restaurant name send ');
        }

        return $this->render('restaurant/index.html.twig', ['restaurant'=>$restaurant]);


    }
}