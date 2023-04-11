<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="https://www.vatera.hu/user/mod/check_vop_login_jwt.php"> 
        <input type="text" name="clilog" id="adat">
        <input type="text" name="clikey" id="masadat">
        <input type="hidden" name="terms_conditions_accept" value="1">
        <!-- hiddent többek között termékazonosító kódnál használható,
        mert a felhasználó számára felesleges megjeleníteni -->
        <button type="submit">Küld</button>
    </form>
</body>
</html>