<?php
//1.Számoljuk meg egy sorozatban (tömb) hány páros szám van.

$szamok = [2, 5, 7, 8, 6, 1, 11];
$szamok = array(3, 2, 6, 7, 8, 11);
$db = 0;
for ($i=0; $i < count($szamok); $i++) {//count a tömb teljes hossza/tartalma
    if($szamok[$i] % 2 ==0){
       // echo ($szamok[$i].'<br>');
        $db++;
    }
}
echo($db. ' páros szám van');

//2. Van-e páros szám az alábbi sorozatban

$szamok2 = [3, 37, 7, 6, 1, 11];

for ($i=0; $i <count($szamok2) ; $i++) { 
    if($szamok2[$i] % 2 ==0){
        break;/*Kimegy a for ciklusból és a ciklus utáni első sorra fog ugrani.
        Ebben az esetben az érdekel,hogy van e ilyen a sorozatomban.(pl. ha a harmadik már az amit keresek akkor vége)*/

     }
}
//echo ('Ciklus vége ' . $i);

 if($i != count($szamok2)){
    echo ("Van a sorozatban 2-vel osztható");
 }
