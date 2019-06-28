<?php

namespace App\Controller;


use App\Entity\Resto;
use App\Service\NomResto;
use App\Service\TagScraper;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\readCookie;

class HomeController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }


    /**
     * @Route("/", name="home")
     */
    public function index(TagScraper $scraper, NomResto $nomResto, EntityManagerInterface $en)
    {
        $this->session->remove('tags');

        $arraySortCookie = readCookie::CookMyCookie();

        $this->session->set('tags', $arraySortCookie);

        $toutResto = $en->getRepository(Resto::class)->findAll();

        return $this->render('home/index.html.twig', [
            'toutresto' =>$toutResto,
        ]);
    }




}
