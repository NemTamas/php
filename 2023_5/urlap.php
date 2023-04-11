<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--A method POST és GET lehet.
https://www.php.net/manual/en/reserved.variables.post.php
https://www.php.net/manual/en/reserved.variables.get.php
-->
<body>
 
<!-- //Elküldi a feldolgoz.php-nak az adatot az action segítségével
name meghatározása nélkül nem küldi el az adatokat
-->
    <form method="POST" action="feldolgoz.php"> 
        <input type="text" name="adat" id="adat">
        <input type="text" name="masadat" id="masadat">
        <input type="number" name="szamadat" id="szamadt">
        <!-- numbert is szövegként küldi át,ezért értelmezni kell azokat -->
        <!-- Minden adatot ellenőrizni kell ami beérkezik,meg feltörhető lesz a szerver -->
        <button type="submit">Küld</button>
    </form>

<?php
print('Get');
print('</pre>');
var_dump($_GET);
print('</pre>');
print('<pre>');
var_dump($_POST);
print('</pre>');

?>

</body>

</html>