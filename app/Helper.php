<?php

namespace App;


class Helper 
{

    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function loadTable(string $tablehtml)
    {
        $dom = new \DOMDocument();
        $dom->loadHtml($tablehtml);
        $x = new \DOMXpath($dom);
        foreach($x->query('//td') as $td){
            echo $td->C14N();
            echo ('</br>');
            //if just need the text use:
            //echo $td->textContent;
        }

    }

    public static function ReadFileLineByLine($filename)
    {
        $str = "";
        $handle = fopen($filename, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $str .= $line;
            }
            fclose($handle);
        }
    }



}
