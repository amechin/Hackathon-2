<?php

namespace App\Controller;


use App\Entity\Resto;
use App\Service\NomResto;
use App\Service\TagScraper;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TagScraper $scraper, NomResto $nomResto, EntityManagerInterface $en)
    {
        $logo = $nomResto->logoResto();
        $tags = $scraper->getAllTagsByRestaurants();
        $description = $nomResto->descriptionResto();
        $nameResto = $nomResto->nomResto();
        $toutResto = $en->getRepository(Resto::class)->findAll();

        return $this->render('home/index.html.twig', [
            'toutresto' =>$toutResto,
        ]);
    }




}
