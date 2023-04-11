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
    <button type="submit" >Ellenőriz</button>
</form>
<?php
    require_once('fuggveny.php');
    $szoveg = beerkezoAdatEllenorzessel($_POST);
    $palindrom_e = palindromVizsgalat($szoveg);
    palindromEredmenyNyomtatas($palindrom_e, $szoveg);
?>
</body>
</html>
