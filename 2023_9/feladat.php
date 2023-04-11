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
    <input type="number" name="oszlop">
    <label>Oszlop</label>  
    <br/>
    <input type="number" name="sor">
    <label>Sor</label>  
    <br/>
    <button type="submit">Rendben</button>   

    </form>

    <?php

    if (isset($_POST['oszlop']) && isset($_POST['sor'])) {
        $oszlopSzama = (int) $_POST['oszlop'];
        $sorSzama = (int) $_POST['sor'];
        ?>  
        <table border = "1">
            <?php
            for ($sor = 0; $sor <= $sorSzama; $sor++) {
                ?>
            <tr>
            <?php
            for ($oszlop = 0; $oszlop <= $oszlopSzama; $oszlop++) {
                ?>
    <td>$nbsp</td>
             </tr>

            
      
    <?php

            } ?>
        </table>
        <?php
            }
    }
?>
</body>
</html>