<?php

if(!function_exists('valamilyen'))
//megnézem hogy létezik e a függvény
{
function valamilyen($parameter){
   return 1;
        //print('nyomtatunk return utan');
}
$valtozo = valamilyen(2);
    print($valtozo);
}

function paritas(array $ertekek, bool $paros = true): array
{ 
        //(parameter, opcionális paraméter(nem kell kitölteni))
        $valogatottErtekek = [];
        foreach ($ertekek as $ertek) {
            if ($paros) {

                if ($ertek % 2 == 0) {
                    $valogatottErtekek[] = $ertek;
                }
            } else {
                if ($ertek % 2 == 1) {
                    $valogatottErtekek[] = $ertek;
                }
            }
        }
        return $valogatottErtekek;
    }

/*
$szamok = [1, 2, 3, 4, 5, 6, 7, 8, 22, 33, 44, 55, 66, 77, 88, 99];
$parosSzamok = paritas($szamok);// ha beírom a falset akkor a páratlan számokat írja ki
print('<pre>');
var_dump($parosSzamok);
*/