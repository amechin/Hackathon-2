<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class ImagesScraper
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllImages()
    {
        $results =
            [
                'id' => '',
                'image' => ''
            ];
        $fichier = file_get_contents("../public/justeat.json", true);
        $fichier = json_decode($fichier, true);
        $fichier = $fichier['result']['extractorData']['data'][0]['group'];

        for($i=0; $i<=62; $i++){
            $images = $fichier['result']['extractorData']['data'][0]['group'][$i]['Restaurant Image'];
            for($j=0; $j < count($images);$j++) {
                $results[$i][] = $images[$j]['src'];
            }
        }
        return $results;
    }
}
