<?php

if(!function_exists('palindrom')){
    function palindrom(string $palindrom){
        $szoveg = str_replace(' ', '', $palindrom);
        //' '-mit cseréljen, ''- mire,$szoveg- miben
        $szoveg = mb_strtolower($szoveg);
        // a nagybetűket kis betűvé alakítja
        $szovegTomb = mb_str_split($szoveg);
        $count = count($szovegTomb);
        $isPalindrom = true;
        for ($i=0; $i < (int)($count /2); $i++) { 
            if($szovegTomb[$i] != $szovegTomb[$count-1 -$i]){
                $isPalindrom = false;
            }
        }
return $isPalindrom;
    }
}

