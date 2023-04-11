<?php

$rendezettTomb = [1, 13, 24,33, 34, 44, 55, 66];
$rendezetlenTomb = [2, 4, 1, 78, 34, 22, 102,45];
$keresettElem = 34;
// rendezett tömböt keresni optimálisabb,ezért s tömböt érdemes rendezni előtte

for ($i=0; $keresettElem >= $rendezettTomb[$i] && $i < count($rendezettTomb); $i++) { 
   if($rendezettTomb[$i] == $keresettElem){
        print($i);
        echo ('<br>');
   }
}
echo ('Ciklus futás ' . $i);
echo ('<br>');
for ($i=0; $i < count($rendezetlenTomb); $i++) { 
    if($rendezetlenTomb[$i] == $keresettElem){
        print($i);
        echo ('<br>');
    }
}
echo ('Ciklus futás ' . $i);