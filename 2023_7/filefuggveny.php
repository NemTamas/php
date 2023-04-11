<?php

function csv2Array(string $fileName){
    $allData = [];
    if(file_exists($fileName)){
    $handler = fopen( $fileName, 'r');
    
$count = 0;

while(($data = fgetcsv($handler,null,';')) !== false){
//fgetcsv tömmbé alakítja amit beolvas
   $allData[]=$data;
    $count++;
}
    $allData['lineCount'] = $count;
fclose($handler); 
}
    return $allData;
}