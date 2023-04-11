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
        <tr>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
    </table>

    <table>
    <?php
    for ($i = 0; $i < 10; $i++){
    ?>

        <tr>
            <td><?php print($i); ?>

            </td>
        </tr>

        <?php
}
        ?>
    </table>
</body>
</html>