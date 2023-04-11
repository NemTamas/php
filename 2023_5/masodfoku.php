<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Másodfokú</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="a" >x<sup>2</sup>+
        <input type="number" name="b" >x+
        <input type="number" name="c" >
<button type="submit" name="barmi" value="submitgomb">Megold</button>
    
</form>
<?php
//var_dump($_POST);
if(isset($_POST['a'])){
//ellenőrzöm,hogy a $_POST-ban létezik-e az "a" kulcs

$a = (int) $_POST['a'];
$b = (int) $_POST['b'];
$c = (int) $_POST['c'];

$d = pow($b, 2) - 4 * $a * $c;
    if($d>0){
       $x1 = (-1 * $b + sqrt($d)) / 2 * $a;
       $x2 = (-1 * $b + sqrt($d)) / 2 * $a;

        print("x1 = $x1, x2 = $x2");
    }else{
        print('nincs megoldás a valós számok halmazán');
    }
}

?>




</body>
</html>