<?php

include('fuggveny.php');
include_once('fuggveny.php');
/*masik php-ben megírom a függvényt is ide belinkelem az include-al
Ennek a párja a require.-> require('fuggveny.php')
Ha egy függvény egyszer már be van hívva nem tudom mégegyszer behívni.
A _once behívja a függvényt ha mégnem volt máshol behívva,de he bevolt nem hívja be mégegyszer.
*/

$szamok = [1, 2, 3, 4, 5, 6, 7, 8, 22, 33, 44, 55, 66, 77, 88, 99];
$parosSzamok = paritas($szamok);// ha beírom a falset akkor a páratlan számokat írja ki
print('<pre>');
var_dump($parosSzamok);