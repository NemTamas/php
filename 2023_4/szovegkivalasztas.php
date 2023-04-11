<?php

//Egy szövegben keressük az adott részt

$szoveg = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quisquam, asperiores ullam cum libero beatae fugit quasi dignissimos voluptates dolore deleniti aspernatur quaerat soluta autem? Nesciunt necessitatibus maiores optio esse.
Veniam, sequi ad ducimus magni rerum perferendis excepturi odit esse quisquam consectetur iure culpa quia deleniti deserunt id quod necessitatibus expedita inventore eveniet aliquid autem, similique possimus doloremque mollitia? Quia!";
$keresettSzoveg = "sim";
$keresettSzovegCharacter = "i";
$szovegTomb = str_split($szoveg);
$i = 0;

while($i < count($szovegTomb) && $szovegTomb[$i] <> $keresettSzovegCharacter){
 
    $i = $i + 1;
}
echo($i);
echo('<br>');
$pos = strpos($szoveg, $keresettSzovegCharacter);//a szövegben a keresett karakterből az első db hanyadik
echo ($pos);
echo('<br>');
$pos = strpos($szoveg, $keresettSzovegCharacter,7);// a 7.index-től keresse
echo ($pos);
echo('<br>');
echo ('<hr>');
$pos = 0;
while ($pos = strpos($szoveg, $keresettSzovegCharacter,$pos)){
    echo ($pos). '|';
    $pos++;
}