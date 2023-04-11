<?php
if(!function_exists('palindromVizsgalat')) {
    function palindromVizsgalat(string $palindrom){
        $szoveg = str_replace(' ', '', $palindrom);
        $szoveg = mb_strtolower($szoveg);
        $szovegTomb = mb_str_split($szoveg);
        $count  = count($szovegTomb);
        $isPalindrom = true;
        
        for($i = 0; $i < (int)($count/2); $i++) {
            if($szovegTomb[$i] != $szovegTomb[$count-1 -$i]){
                $isPalindrom = false;
            }
        }
        return $isPalindrom;
    }
}
if (!function_exists('palindromEredmenyNyomtatas')) {
    function palindromEredmenyNyomtatas(bool $palindrom_e, string $szoveg)
    {
        if (strlen($szoveg) > 0) {
            if ($palindrom_e) {
                print("A '$szoveg' egy palindrom");
            } else {
                print("A '$szoveg' nem palindrom");
            }
        }
    }
}

if (!function_exists('beerkezoAdatEllenorzessel')) {
    function beerkezoAdatEllenorzessel(array $postArray)
    {
        if (isset($postArray['szoveg'])) {
            return $postArray['szoveg'];
        }
        return '';
    }
}
