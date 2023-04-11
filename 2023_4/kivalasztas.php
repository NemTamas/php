<?php

$tomb = [1, 4, 3, 5, 7, 7, 84, 3, 4];
$tombVanBenne = [1, 4, 3, 78, 7, 7, 84, 3, 4];
$keresettElem = 78;
$i = 0;

//ciklus addig amíg tomb[$i != vagy <> keresett elem]
//elöltesztelő ciklus
while($i < count($tomb) && $tomb[$i] <> $keresettElem){
/* <>-jelentése nem egyenlő.A "$i < count($tomb)" azért kell,mert ha a keresett szám nincs benne a tömbben akkor végtelen ciklust eredményezne.
Ebben az esetben balról jobbra értékeli ki,ezért nem fut hibára*/
    $i = $i + 1;

}
echo ($i)."<br>";
//másképp

for ($i = 0; $i < count($tomb); $i++){
    if($tomb[$i] == $keresettElem){
        break;
    }
}
echo ($i)."<br>";


foreach ($tomb as $key => $value){
    if($value == $keresettElem){
        break;
    }
}
echo($key);
