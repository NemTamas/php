<?php
$szam = 3;
$valtozo = 'szoveg $szam';
$valtozo2 = "szoveg $szam";

$kiirando1 = 'sor lezárás \n';
$kiirando2 = "sor lezárás \n";

// /n új sort jelent \r is.windowsnál \r\n

$idezettszoveg = "Ez egy szép idézet: 'valami' ";
$angolszoveg = "isn't \"idézett szöveg\" ";

// menekülő karekter -->  \ Mindig párban kell lennie.Emelett a nyomtatásvezérlő karakterek előtt is ez van
print('szimpla aposztróf között változó: ');
print($valtozo);
print('<br>');
print($valtozo2);
print('dupla aposztróf között változó: ');
print('<br>');
print("Vezérlő karakter \n szimpla aposztrófok között");
print($kiirando1);
print('<br>');
print("Vezérlő karakter \n dupla aposztrófok között");
print($kiirando2);
print('<br>');
print("dupla,szimpla aposztrófok aposztrófok keverve");
print($idezettszoveg);
print('<br>');
print("escape karakter");
print($angolszoveg);