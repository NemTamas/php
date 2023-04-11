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
    <label>Írjon be egy szöveget</label>
    <input type="text" name="szoveg">
    <button type="submit">Ellenőriz</button>



    </form>

    <?php
    require_once('fuggveny.php');
    if(isset($_POST['szoveg'])){
        $szoveg = $_POST['szoveg'];
        $palindrom_e = palindrom($szoveg);
        if($palindrom_e){
            print("A '$szoveg' egy palindrom");
        }else{
            print("A '$szoveg' nem palindrom");
        }
    }


?>
</body>
</html>