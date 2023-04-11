<?php
require_once('filefv.php');
$raktarkeszletArray = csv2Array('Raktar.csv');
unset($raktarkeszletArray['lineCount']);
//print('<pre>');
//var_dump($raktarkeszletArray);
$mRaktarkeszletArray = $raktarkeszletArray;
$ujRaktarkeszletArray = [];
$db = count($mRaktarkeszletArray);
for ($j = 0; $j < $db; $j++) {
    if (isset($mRaktarkeszletArray[$j])) {
        $keresettElem = $mRaktarkeszletArray[$j][0];
        //print($keresettElem . '<br>');
        $tarhely = $mRaktarkeszletArray[$j][1];
        for ($i = $j + 1; $i < $db; $i++) {
            if (isset($mRaktarkeszletArray[$i])) {
                if ($keresettElem == $mRaktarkeszletArray[$i][0]) {
                    //print(' talalt '.$mRaktarkeszletArray[$i][0]);
                    //print('<br>');
                    $tarhely .= ',' . $mRaktarkeszletArray[$i][1];
                    unset($mRaktarkeszletArray[$i]);
                }
            }
        }
        $ujRaktarkeszletArray[] = [$keresettElem, $tarhely];
    }
}
//print('<pre>');
//var_dump($mRaktarkeszletArray);
//print('</pre>');

print('<pre>');
var_dump($ujRaktarkeszletArray);
print('</pre>');

//SELECT tid, group_concat(tarhely) FROM keszlet GROUP BY tid;
