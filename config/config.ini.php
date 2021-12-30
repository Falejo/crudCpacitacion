<?php
include("./librerias/smarty/libs/smarty.class.php");

$smarty = new smarty;

class conectar
{

  public static function conexion()
  {

    $servername = "10.181.3.183:3366";
    $username = "desacrm";
    $password = "Pys1103";
    $database = "contact_pqr";
    //$dbport = "3366";

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
    }

    return $conexion;
  }
}

//echo "Connected successfully";
