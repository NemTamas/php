<?php


function getUserData(string $email){
    $handler = fopen('users.txt', 'r');
    $i = 0;
    while(($data = fgetcsv($handler,null, ";")) !== FALSE) {
        if(trim($data[0]) === trim($email)){
            fclose($handler);
            return $data;
        }
    }
    fclose($handler);
    return [];
}