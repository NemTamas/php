<?php
//Ezzel a módszerrel új adatokat szúrunk be egy már meglévő adatbázisba(jelen esetben a blogilla-ba)
require_once('dbconfig.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bejegyzes (cim, rovidtartalom, tema_id, szerzo_id)
VALUES ('Ez egy bejegyzes', 'Nagyon jó bejegyzés', '1', '2')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);