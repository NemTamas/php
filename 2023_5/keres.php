<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" > 
        <input type="number" name="keresettelem" id="adat">
    
        <button type="submit">Küld</button>
    </form>
<?php
if (isset($_POST['keresettelem'])){
/*isset.Megkérdezzük,hogy adott változó létezik e.(be van e neki állítva érték)
https://www.php.net/manual/en/function.isset.php
https://www.php.net/manual/en/types.comparisons.php*/
$tomb = [1, 4, 78, 3, 5, 4, 7, 84, 3, 4];
//int-el számmá alakítja a szöveget is
$keresettElem = (int)$_POST['keresettelem'];
$i = 0;
for ($i=0; $i <count($tomb) ; $i++) { 
    if($tomb[$i] == $keresettElem){
        print($i . '|');
    }
}
}

?>

</body>
</html>