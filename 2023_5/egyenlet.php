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
    <input type="text" name="egyenlet" >
    <button type="submit">Megold</button>
</form>
<?php
/*
5x+2=4x-3
5x = 4x - 5
x = -5
*/
if(isset($_POST['egyenlet'])){
    $egyenlet   = $_POST['egyenlet'];
    $abOldal    = explode('=', $egyenlet);
    print('<pre>');
    var_dump($abOldal);
    print('</pre>');
    $aOldal     = explode('x', $abOldal[0]);
    $bOldal     = explode('x', $abOldal[1]);
    print('<pre>');
    var_dump($aOldal);
    print('</pre>');

    print('<pre>');
    var_dump($bOldal);
    print('</pre>');

    print($aOldal[0]. 'x = '.$bOldal[0] . 'x '.((int)$bOldal[1]-(int)$aOldal[1]));
    print('<br>');
    print((int)$aOldal[0]-(int)$bOldal[0]. 'x = '.((int)$bOldal[1]-(int)$aOldal[1]));
    print('<br>');
    print('x = '.((int)$bOldal[1]-(int)$aOldal[1]) / ((int)$aOldal[0]-(int)$bOldal[0]));
}
?>
</body>
</html>
