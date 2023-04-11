<?php
function getTema() {
    require_once('dbconfig.php');
    $returnArray = [];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        return [];
    }

    //$sql  = "SELECT * FROM bejegyzes ";
    $sql    = " SELECT * FROM tema";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //visszakapott eredmény halmaz számosságát lehet lekérdezni a függvénnyel.
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $returnArray[] = $row;
            }    
        }
    } 
    mysqli_close($conn);
    return $returnArray;
}