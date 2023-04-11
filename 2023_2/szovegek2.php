<?php 
//általános

$valtozo = 'Indul a görög aludni';

print("$valtozo szövegben keressük a 'görög' szót : ");
$pos = strpos($valtozo, 'görög');
print(strpos($valtozo, 'görög'));
print('<br>');
print("$valtozo szövegben keressük a 'hurrá' szót : ");
var_dump(strpos($valtozo, 'hurrá'));
print('<br>');
//var_dump a változó tartalmát mutatja meg
//strpos az adott szöveg amit keresek hanyadik index-nél kezdődik

var_dump(strpos('indul', 'ind'));
print('<br>');
var_dump(strpos('indul', 'ind') == 0);
print('<br>');

var_dump(strpos('indul', 'ind') == false);
print('<br>');
var_dump(strpos('indul', 'ind') === false);

//PHP gyengén típusos nyelv vagy nem típusos nyelv.
/*((JAVA: 
 int valami = 0;
 boolean masikvalami = false;
 valami = masikvalami => hamis lesz !!!!))

 //valaimaima

Azonos típusra alakítja őket
false => 0
true => 1
*/
print('<br>');
print(strpos('kék nárcisz volt ott meg kék tulipán és még rózsa is kék volt', 'kék'));
print('<br>');
print(strpos('kék nárcisz volt ott meg kék tulipán és még rózsa is kék volt', 'kék', 1)); // 0 utáni első pozíciótól keres
print('<br>');
print(strpos('kék nárcisz volt ott meg kék tulipán és még rózsa is kék volt', 'kék', 28));// 0 utáni 28. pozíciótól keresi a 'kék'-et
print('<br>');

print(strtolower($valtozo));
print('<br>');
//csupa kisbetűvel írja ki
print(strtoupper($valtozo));
print('<br>');
/*csupa nagybetűvel írja ki.Az ékezetes karaktereket nem állítja nagyra
ezekben az esetekben multi byte-ot kell használni.Ez ismeri fel a 16 bites karaktereket.
!!! mb_strtoupper()!!!!!
*/
print(mb_strtoupper($valtozo));
print('<br>');

//ucwords - az összes szóban módósítja a karaktert amire szeretném(Az összes első karatker nagy legyen,az összes karakter nagy legyen,stb..)
/*Szöveg hosszának megállapítása - strlen
ékezetes karaktereket ez sem adja vissza.Ennél is használni kell az multi byte-ot
mb_strlen*/
print(mb_strlen('Adott szöveg hány karakterből áll'));
print('<br>');
print(strlen('Adott szoveg hany karakterbol all'));
print('<br>');

/*substr a szöveg egy részét adja vissza
$rest = substr("abcdef", -1);    // returns "f"
$rest = substr("abcdef", -2);    // returns "ef"
$rest = substr("abcdef", -3, 1); // returns "d"
$rest = substr("abcdef", 0, -1);  // returns "abcde"
$rest = substr("abcdef", 2, -1);  // returns "cde"
$rest = substr("abcdef", 4, -4);  // returns ""; prior to PHP 8.0.0, false was returned
$rest = substr("abcdef", -3, -1); // returns "de"
$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];                 // d
echo $string[strlen($string)-1]; // f
*/
print(substr('Adott szöveg része', 14, 6));// 14. indextől 6 karakter
print('<br>');
$nev = 'index_534';
print(substr($nev, strpos($nev, '_')+1)); //ebben az esetben az 5-től adja vissza mert az 5 a "_" után van 1-el
print('<br>');
print(substr('index_534', 5+1));// előző eset más módon

/*nl2br
new line-t br-ekre cseréli.
Új sorokat sortörésre cseréli*/

//str_replace - A szövegben felül tudok írni egy rész szöveget mésik szövegre. Pl. kiakarok valamit csillagozni a szövegben. Írásjeleket akarom kicserélni.

//str_split - egy szöveget karakterekre tudom bontani és be tudom "járni".Lehet használni olyan esetekben is amikor b.szla szémot vagy adószámot ellenőrzünk,hogy létező e.

$szamok = str_split('12345678-12345678');
print('<pre>');// pre - karakterenként széttördeli
var_dump($szamok);
print('</pre>');
print('<br>');
print($szamok[2]);


