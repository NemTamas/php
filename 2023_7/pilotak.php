<?php

require_once('filefuggveny.php');

$pilotakArray = csv2Array('pilotak.csv');
/*print('<pre>');
var_dump($pilotakArray);
print('</pre>');*/
print('<h1>3.Feladat</h1>');
print('Piloták.csv sorok száma:'. (isset($pilotakArray['lineCount']) ? $pilotakArray['lineCount'] : 0));
print('<h1>4.Feladat</h1>');

reset($pilotakArray);
end($pilotakArray);
//Utolsó pilóta nevének kiírása
$utolsoPilota = prev($pilotakArray);
print('Piloták.csv utolsó sorában szereplő neve:'
. (isset($utolsoPilota[0]) ? $utolsoPilota[0] : '-'));
print('<br>');
// másik verzió
print('Piloták.csv utolsó sorában szereplő neve 2:'
. (isset($pilotakArray[count($pilotakArray)-2][0]) ? $pilotakArray[count($pilotakArray)-2][0] : '-'));
print('<br>');
print('<h1>5.Feladat</h1>');
print('Piloták.csv 1900 előtt született pilóták adatai:');
print('<br>');
foreach ($pilotakArray as $key => $value) {
    if(isset($value[1])){
        $datumElem = explode('.', $value[1]);
        if ((int)$datumElem[0] < 1900){
            print('név:' . $value[0] . ' születési dátum: ' . $value[1].'<br>');

        }
    }
}