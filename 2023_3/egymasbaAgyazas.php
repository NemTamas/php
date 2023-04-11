<table>
    <?php
    for ($i = 0; $i < 10; $i++){
    ?>

        <tr>
            <td <?php if ($i % 2 == 0) {
                echo("style='color:red'");
            }?>>
            <?php echo($i); ?>

            </td>
        </tr>
        <?php
             }        
        ?>

            </table>