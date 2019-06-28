<?php


namespace App\Service;


class readCookie
{
    public static function CookMyCookie()
    {

        $fichier = "cookies.csv";

        $tab = (readCookie::parse_csv_file($fichier, true, ','));
        $index = random_int(0, sizeof($tab)-1);
        $var = $tab[$index];
        unset($var[array_search($var['cookie_id'], $var)]);
        arsort($var);
        return $var;
    }

    public static function parse_csv_file($file, $columnheadings = true, $delimiter = ',', $enclosure = "\"")
        {
        $row = 1;
        $rows = array();
        $handle = fopen($file, 'r');

        while (($data = fgetcsv($handle, 1000, $delimiter, $enclosure )) !== FALSE) {

            if (!($columnheadings == false) && ($row == 1)) {
                $headingTexts = $data;
            } elseif (!($columnheadings == false)) {
                foreach ($data as $key => $value) {
                    unset($data[$key]);
                    $data[$headingTexts[$key]] = $value;
                }
                $rows[] = $data;
            } else {
                $rows[] = $data;
            }
            $row++;
        }

        fclose($handle);
        return $rows;
    }

}