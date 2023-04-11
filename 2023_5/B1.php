<?php
$amibe = [];
for ($i = 0; $i <= 40; $i += 2) {
    $amibe[] = $i;
    print($i . ' | ');
}
print('<pre>');
var_dump($amibe);
print('</pre>');

print('<br>');
print('<br>');
$amibol = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$amibol2 = [2, 5, 2, 2, 7, 8, 7, 7, 9, 10, 11];
$amibe1 = [];
for ($i = 1; $i < count($amibol2); $i++) {
    if ($amibol2[$i] % 2 === 0) {
        $amibe1[] = $amibol2[$i];
        print($i . ' | ');
    }
}
print('<pre>');
var_dump($amibe1);
print('</pre>');

print('<br>');
print('<br>');
$tomb = [1, 4, 78, 3, 5, 4, 7, 84, 3, 4]; 
$keresettElem = 4;
$i = 0;
for ($i = 0; $i < count($tomb); $i++) {
    if ($tomb[$i] == $keresettElem) {
        print($i . ' | ');
    }
}
