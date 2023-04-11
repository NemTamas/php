<?php
//szam -> integer (egész szám), float (tört vagy lebegő pontos szám)
$valtozo = 234;
$valtozo2 = "Krumpli";

echo $valtozo;
print "<br>";
// Szintakszis ==> Helyesírás
/* Hibák előfordulási lehetőségei:
-szerkesztési időben
-futási időben
-fordítási időben
*/

$valtozoSzoveg = "75";

$valtozoSzoveg2 = '54';
print($valtozoSzoveg . $valtozoSzoveg2);
// . összefűzi a változókat
print ("<br>");
print($valtozoSzoveg+$valtozoSzoveg2);
print ("<br>");
// + összeadja a változókat
print($valtozoSzoveg + 18);
