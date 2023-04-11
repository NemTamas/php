<?php
//var_dump($_POST);
if(isset($_POST['cim'])){
    $cim            = filter_var($_POST['cim'], FILTER_SANITIZE_SPECIAL_CHARS);
    $rovidtartalom  = filter_var($_POST['rovidtartalom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $tartalom       = filter_var($_POST['tartalom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $tema           = intval($_POST['tema']);

    require_once('dbconfig.php');

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO bejegyzes (cim, rovidtartalom, tartalom, tema_id, szerzo_id)
    VALUES ('".$cim."', '".$rovidtartalom."', '".$tartalom."', '".$tema."', '2')";
    print($sql);
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: adatlekerdezes.php');
    // elküldi az adatokat az adatlekerdezes.php-nak

}