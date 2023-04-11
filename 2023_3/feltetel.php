<?php 
//feltétel esetén elágazás
$maradek = 5 % 2; //modulus -> maradék képzés,maradékos osztás
//páros szám-e? 5 % 2 == 0;

//páratlan szám-e?  5 % 2 ==1

$szam = 16;
if($szam % 2 === 0){
    print("Páros");
} else{
    print("Páratlan");
}
print('<br>');

if ($szam % 2 !== 0):
    print('Páratlan');
else:
    print("Páros");
endif;
// a {}-et helyettesíti az endif.Ilyenkor egyben a kezeli az ezelőtti szakaszt.
//""  ->  üres karakterlánc
print('<br>');
$szo = "";
if(strlen($szo) > 0){
    print($szo);
}