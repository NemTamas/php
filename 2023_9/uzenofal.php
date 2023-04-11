<?php
session_start();
?>
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
    Üzenet
    <textarea name="message" rows="5" cols="15" placeholder="Kérem írja be üzenetét"></textarea>
    <button>Küld</button>
</form>
<?php
    //ebbe készül egy függvény, ami a kapott üznetek, ellenőrzés után
    //egy file-ba menti
    //ebbe készül egy másik függvény, ami kiolvassa az üzeneteket ugyanabból a file-ból

    //require_once('filementes.php');
    if(isset($_POST['message'])) {

        //ALERT!!!! ellenőrzés!!!!
        if(isset($_SESSION['message'])){
        //filter_var !!!
            $_SESSION['message'] .= $_POST['message'].'<br>';
        } else {
            $_SESSION['message'] = $_POST['message'].'<br>';
        }
    }
    if(isset($_SESSION['message'])) {
        print($_SESSION['message']);
    }
?>



</body>
</html>