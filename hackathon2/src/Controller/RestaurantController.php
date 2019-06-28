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
     * @Route("/restaurant/{id<^[0-9-]+$>}", defaults={"id" = 1},
     *  name="restaurant")
     * @return Response
     **/
    public function showRestaurantById($id)
    {
        $restaurant = $this->getDoctrine()->getRepository(Resto::class)
            ->findOneBy(['id'=>$id]);
        if(!$restaurant) {
            throw $this
                ->createNotFoundException('No restaurant name send ');
        }

        $restaurants = $this->getDoctrine()->getRepository(Resto::class)->findAll();

        return $this->render('restaurant/index.html.twig', [
            'restaurant'=>$restaurant,
            'allResto'=>$restaurants]);


    }
}