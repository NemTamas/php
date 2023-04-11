<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrom</title>
</head>
<body>
<form method="POST">
    <label>Írjon be egy szöveget</label>
        <input type="text" name="szoveg" >
<button type="submit">Ellenőriz</button>
    
</form>
<?php
//Évák eledele kávé
//Indul a görög aludni
//Géza kék az ég
if(isset($_POST['szoveg'])){
    $szoveg = $_POST['szoveg'];
    $szoveg = str_replace(' ', '', $szoveg);
    //' '-mit cseréljen, ''- mire,$szoveg- miben
    $szoveg = mb_strtolower($szoveg);
    // a nagybetűket kis betűvé alakítja
    $szovegTomb = mb_str_split($szoveg);
    $count = count($szovegTomb);
    $palindrom = true;
    for ($i=0; $i < (int)($count /2); $i++) { 
        if($szovegTomb[$i] != $szovegTomb[$count-1 -$i]){
            $palindrom = false;
        }
    }
  /*  for ($i=0; $i < (int)(mb_strlen($szoveg) /2); $i++) { 
        if(mb_substr($szoveg,$i,1) != mb_substr($szoveg, mb_strlen($szoveg))-1-$i,1){
            $palindrom = false;
        }
    }*/
    $eredmeny = $palindrom ? 'Ez egy palindrom' : 'Ez nem palindrom';
    echo $eredmeny;
}



?>


</body>
</html>