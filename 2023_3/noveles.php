<?php

$szam = 1;
//jobbról balra értékeljük ki a sort
$szam = $szam + 1;
$szam += 1; 
$szam++; //postfix változat
//csak 1 növelésére lehet használni, ennél nagyobbra nem lehet használni
//minden esetben 1-el növeltem a szam változó értékét

$valtozo = ++$szam;//prefix változat.előbb növel aztán adja vissza az értéket.

