<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('filefeldolgoz.php');
        require_once('tablazatkirajzol.php');

        $details = csv2array('Lottoszamok.csv');
        $tableString = array2table($details, true);

        print($tableString);
    ?>
</body>
</html>