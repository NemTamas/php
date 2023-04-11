<?php

$handler = fopen('adatok.csv', 'r');
$i = 0;

while(($data = fgetcsv($handler,null,';')) !== false){
//fgetcsv tömmbé alakítja amit beolvas
    var_dump($data);
    print('<br>');
    $i++;
}

fclose($handler);