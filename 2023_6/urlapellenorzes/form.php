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
    <input type="text" name="nev" placeholder="Kérem írja be a nevét">
    <input type="text" name="tajszam" placeholder="Kérem írja be a tajszámát">
    <button type="submit" >Elküld</button>
</form>
<?php
    //tajszam           => 012345678
    //rendszam          => ABC123
    //bankszamlaszam    => 00100000
    //telefonszam       => 06703334445
    if(isset($_POST['nev']) && isset($_POST['tajszam'])){
        require_once('fuggvenyek.php');
        //tajszam ellenorzes
        $tajszam = $_POST['tajszam'];
        var_dump(isTajszam($tajszam));
    }
?>
</body>
</html>