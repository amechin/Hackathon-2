<?php

namespace App\Controller;

use App\Repository\TagRepository;
use App\Service\TagScraper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TagScraper $scraper)
    {
        $tags = $scraper->getAllTags();

        return $this->render('home/index.html.twig', [
            'tags' => $tags,
        ]);
    }
}
