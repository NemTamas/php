<?php

for ($i=0; $i < 10; $i++) { 
   if ($i % 2 ==0){
        echo ('Páros szám: ' . $i."<br>");//.-al hozzáfűzök
   }
}
//Feladat az alábbi szöveget karakterenként elérni
$szoveg = 'Evak eledele kave';
$szoveg2 = '11111111-11111111-11111111';
// 1. substr
for ($i=0; $i < mb_strlen($szoveg); $i++) {
    print(mb_substr($szoveg, $i, 1) . '<br>');
}


//2. strsplit  -> tömb
$karakterTomb = mb_str_split($szoveg);
var_dump($karakterTomb);
for ($i = 0; $i < count($karakterTomb); $i++){
    echo($karakterTomb[$i].'<br>');
}
print('<hr>');
foreach($karakterTomb as $key => $value){
    print($value);
}
print('<hr>');
foreach($karakterTomb as $value){
    print($value).'<br>';
}
print('<hr>');
