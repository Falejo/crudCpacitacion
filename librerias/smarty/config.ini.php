<?php 
include("libs/smarty.class.php");

$smarty = new smarty;

$servername = "10.181.3.183:3366";
$username = "desacrm";
$password = "Pys1103";
$database = "contact_pqr";
//$dbport = "3366";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

/** 
if ($conn->connect_error) 
  die("Connection failed: " . $conn->connect_error);


print "conexion exitosa";

exit(1);*/


?>