<?php


namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;

class ImageScraper
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getImagesByResto()
    {
        $json = file_get_contents('justeat.json');
        $datas = json_decode($json, true, 512);

        $source = $datas['result']['extractorData']['data'][0]['group'];
        $images = [];

        for ($i = 0; $i < count($source); $i++) {
            $images[$i]['img'] = $source[$i]['Restaurant Image'][0]['src'];
            $images[$i]['logo'] = $source[$i]['Restaurant Image'][1]['src'];
        }
        return $images;
    }
}
