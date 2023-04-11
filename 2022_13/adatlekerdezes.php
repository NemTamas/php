<?php
require_once('dbconfig.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql  = "SELECT * FROM bejegyzes ";
$sql    = " SELECT * FROM bejegyzes AS b
/* a LEFT JOIN utasítással hozzácsatolom azokat a táblákat amiket eredetileg nem kapcsolt hozzá a bejegyzés nevű adatbázisból.
    az AS kifejezéssel,rövidítést alkalmaz az egyes táblákhoz.PL tema AS t.
    b.tema_id=t.id -->a bejegyzés tema id-ja = a tema id-jával
 */
            LEFT JOIN tema AS t ON(b.tema_id = t.id) 
            LEFT JOIN szerzo AS sz ON(b.szerzo_id = sz.id)";

$result = mysqli_query($conn, $sql);

if ($result) {
    //visszakapott eredmény halmaz számosságát lehet lekérdezni a függvénnyel.
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Cím: " . $row["cim"]. " " . $row["rovidtartalom"].
            " Szerző ".$row['nev']. "<br>";
        }    
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);