<?php

//Erőforrás

$handler = fopen('adatok.csv', 'r');
// amíg nem zárom le addig csak én tudom használni,más nem

while(($line = fgets($handler)) !== false){
//fgets beolvassa az adatot
    print($line);
    print('<br>');
}

fclose($handler);