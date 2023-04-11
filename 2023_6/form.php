<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <input type="checkbox" name="szerzodes" id="szerzodes" value="ertek">
    <button type="submit">Ment</button>

<?php

print("<pre>");
var_dump($_POST);
/*if(isset($_POST('szerzodes'))){
    //kipipálták



}else
//nem pipálták ki*/
?>

    </form>
</body>
</html>