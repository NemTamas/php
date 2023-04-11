<?php
session_start();
$_SESSION['nev']= 'Kerek Merek';
//$_SESSION['id'] = uniqid();

print($_SESSION['nev']);
print('<br>');
print($_SESSION['id']);
//unset($_SESSION['nev']);
//tartalom törlése, egy -egy kulcs esetén

//session_destroy();
//Az összes sessionban levő tartalmat törli