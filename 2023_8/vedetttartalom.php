<?php
session_start();
if(!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])){
    //átírányítás
    header('Location: login.php');
}
?>
Itt a védett tartalom!