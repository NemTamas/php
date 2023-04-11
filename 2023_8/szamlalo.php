<?php
session_start();
if(isset($_SESSION['szamlalo'])) {
    $_SESSION['szamlalo'] += 1;
} else {
    $_SESSION['szamlalo'] = 1;
}
print($_SESSION['szamlalo']);


//print($_SERVER['REMOTE_ADDR']);
//print($_SERVER['HTTP_CLIENT_IP']);

