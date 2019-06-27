<?php

namespace App\Controller;


use App\Service\NomResto;
use App\Service\TagScraper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TagScraper $scraper, NomResto $nomResto)
    {
        $logo = $nomResto->logoResto();
        $tags = $scraper->getAllTags();
        $description = $nomResto->descriptionResto();
        $nameResto = $nomResto->nomResto();

        return $this->render('home/index.html.twig', [
            'logos'=>$logo,
            'tags'=>$tags,
            'descriptions'=>$description,
            'nameResto'=>$nameResto
        ]);
    }
}
