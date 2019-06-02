

<?php

$servername = "sql7.freemysqlhosting.net";
$username = "sql7293962";
$password = "AaV7LFaGsm";
$database = "sql7293962";

try {
  // Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
 // echo "Connected successfully to ". $database . " database";

} catch (\Exception $e) {
  echo "No connection to the database: " . $e->getMessage();
}




 ?>
