<?php

namespace App\Service;

use App\Entity\Tag;
use Doctrine\ORM\EntityManagerInterface;

class TagScraper
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllTags()
    {
        $json = file_get_contents('justeat.json');
        $datas = json_decode($json, true, 512);

        $source = $datas['result']['extractorData']['data'][0]['group'];
        $tags = [];

        for ($i = 0; $i < count($source); $i++) {
            foreach($source[$i]['Cuisines'] as $txts) {
                $tags[] = $txts['text'];
            }
        }

        $tags = array_unique($tags);
        $tags = array_combine(range(0, count($tags) - 1), $tags);

        return $tags;
    }

    public function getAllTagsByRestaurants()
    {
        $json = file_get_contents('justeat.json');
        $datas = json_decode($json, true, 512);

        $source = $datas['result']['extractorData']['data'][0]['group'];
        $tagsResto = [];

        for ($i = 0; $i < count($source); $i++) {
            foreach($source[$i]['Cuisines'] as $txts) {
                $tagsResto[$i][] = $txts['text'];
            }
        }

        return $tagsResto;
    }

    public function registerTags() :void
    {
        $datas = $this->getAllTags();
        foreach($datas as $tag){
            $newTag = new Tag();
            $newTag->setName($tag);
            $this->em->persist($newTag);
        }
        $this->em->flush();
    }
}
