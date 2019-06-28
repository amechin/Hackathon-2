<?php


namespace App\Service;


class NomResto
{
    public function nomResto()
    {

        $json = file_get_contents('justeat.json');

        $obj = json_decode($json, true , 512);


        for($i=0;$i<63;$i++) {
            $NomResto[] = $obj["result"]["extractorData"]["data"]["0"]["group"][$i]["Name"]["0"]["text"];
        }
        return $NomResto;
    }


    public function descriptionResto()
    {
        $json = file_get_contents('justeat.json');

        $obj = json_decode($json, true , 512);


        for($i=0;$i<63;$i++) {
            $descriptionResto[] = $obj["result"]["extractorData"]["data"]["0"]["group"][$i]["Restaurant Link"]["0"]["text"];
        }
        return $descriptionResto;
    }

    public function logoResto()
    {
        $json = file_get_contents('justeat.json');

        $obj = json_decode($json, true , 512);


        for($i=0;$i<63;$i++) {
            $logoResto[] = $obj["result"]["extractorData"]["data"]["0"]["group"][$i]["Logo"]["0"]["src"];
        }
        return $logoResto;
    }


}