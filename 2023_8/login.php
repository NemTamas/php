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
    <form method="POST" >
        <input type="email" id="email" name="email" >
        <input type="password" id="password" name="password" >
        <button type="submit" >Belépés</button>
        <?php  print(isset($_SESSION['error']) ? $_SESSION['error']  : ''); ?>
    </form>

    <?php   
        if(isset($_POST['email']) && isset($_POST["password"])){
            require_once('fv.php');
            $email = $_POST['email'];
            $password = $_POST['password'];
            //email cím ellenőrzése !!!!
            $adatok = getUserData($email);
            if(count($adatok) > 0){
                if(password_verify($password, trim($adatok[1])) === true){
                    //beengedem a jó embert
                    $_SESSION['loggedIn'] = true;
                    unset($_SESSION['error']);
                    header('Location: vedetttartalom.php');
                }
            }
            $_SESSION['error'] = "A felhasználó név vagy a jelszó nem megfelelő!";
        }
    ?>
</body>
</html>