<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Resto;
use App\Entity\Tag;
use App\Service\ImageScraper;
use App\Service\NomResto;
use App\Service\TagScraper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/initTags", name="test")
     */
    public function index(ImageScraper $imgScraper, TagScraper $tagScraper)
    {
        $tagScraper->registerTags();
        return $this->render('test/index.html.twig', [
        ]);
    }

    /**
     * @Route("/initResto", name="init")
     */

    public function init(ImageScraper $imgScraper, TagScraper $tagScraper, NomResto $nomResto)
    {
        $em = $this->getDoctrine()->getManager();
        $restaurantsWithTags = $tagScraper->getAllTagsByRestaurants();
        $names = $nomResto->nomResto();
        $descr = $nomResto->descriptionResto();


        $len = count($restaurantsWithTags);

        for($i = 0; $i < $len; $i++){
            $resto = new Resto();
            $resto->setName($names[$i]);
            $resto->setDescription($descr[$i]);
            foreach($restaurantsWithTags[$i] as $tag) {
                $bddTag = $this->getDoctrine()->getRepository(Tag::class)->findOneBy(['Name' => $tag]);
                $bddTag->addResto($resto);
            }
            $em->persist($resto);
        }
        $em->flush();

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("initImages", name="init_img")
     */
    public function initImg(ImageScraper $imgScraper)
    {
        $em = $this->getDoctrine()->getManager();
        $imgByResto = $imgScraper->getImagesByResto();
        $restos = $this->getDoctrine()->getRepository(Resto::class)->findAll();

        $len = count($restos);

        for($i = 0;  $i < $len; $i++){
            $image = new Image();
            $image->setUrl($imgByResto[$i]['img']);
            $restos[$i]->setLogo($imgByResto[$i]['logo']);
            $restos[$i]->addImage($image);
            $em->persist($restos[$i]);
            $em->persist($image);
        }

        $em->flush();


        return $this->render('test/index.html.twig', [
            'images' => $imgByResto,
        ]);
    }
}
