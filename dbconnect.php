
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "mywonder_myshopdbadmin";
$password = "Tanivy5106";
$dbname = "mywonder_myshop";


/* Attempt to connect to MySQL database */
  $conn = new mysqli($servername, $username, $password, $dbname);

 
// Check connection
 if ($conn -> connect_error){
   die("Connection Failed:" . $conn->connect_error);
 }
?>
