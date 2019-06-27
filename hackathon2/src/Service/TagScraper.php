<?php

namespace App\Service;

class TagScraper
{
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
}
