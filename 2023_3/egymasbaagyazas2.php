<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <?php
    for ($sor = 0; $sor < 10; $sor++){
    ?>

        <tr>
            <?php
    for ($oszlop = 0; $oszlop < 10; $oszlop++){
            ?>
            <td <?php if (((($sor*10)+$oszlop)+1) % 2 == 0) {
                echo("style='color:red'");
            }?>>
            <?php echo((($sor*10)+$oszlop)+1); ?>

            </td>
            <?php
            }
            ?>

        </tr>
        <?php
            }         
        ?>

            </table>
</body>
</html>