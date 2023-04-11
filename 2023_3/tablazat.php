<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $szam = 1; ?>
    <table>
        <tr>
            <td style="<?php if ($szam % 2 == 0) {
                print('color:red');
            }?>">
                <?php print($szam);
                $szam++;
                ?>
                </td>
</tr>
        <tr>
            <td>
            <td style="<?php if ($szam % 2 == 0) {
                print('color:red');
            }?>">
                <?php print($szam);
                $szam++;
                ?>
                </td>
                
</tr>
        <tr>
            <td>
            <td style="<?php if ($szam % 2 == 0) {
                print('color:red');
            }?>">
                <?php print($szam);
                $szam++;
                ?>
                </td>
                
</tr>
        <tr>
            <td>
            <td style="<?php if ($szam % 2 == 0) {
                print('color:red');
            }?>">
                <?php print($szam);
                $szam++;
                ?>
                </td>
                
</tr>
</body>
</html>