<?php
//is    => logikai értéket ad vissza 
//get   => érték kinyerés
//set   => értékadás
function isTajszam(string $tajszam) {
    if(strlen($tajszam) === 9) {
        $tajszamTomb = str_split($tajszam);
        $osszeg = 0;
        for($i=0; $i <= 7; $i++) {
            if(($i+1) % 2 === 0){
                $osszeg += (int)$tajszamTomb[$i] * 7;
                //print(7);
            } else {
                $osszeg += (int)$tajszamTomb[$i] * 3;
                //print(3);
            }
        }
        $CDV = $osszeg % 10;
        //print($CDV);
        return (int)$tajszamTomb[8] === $CDV;
    }
    return false;
}
