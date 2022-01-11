<?php

require_once('./vendor/smarty/smarty/libs/Smarty.class.php');
require("./vendor/adodb/adodb-php/adodb.inc.php");



$smarty = new smarty;



    $servername = "10.181.3.183:3366";
    $username = "desacrm";
    $password = "Pys1103";
    $database = "contact_pqr";
    //$dbport = "3366";

   
    $conexion = newAdoConnection('mysqli');
    $conexion->connect($servername,$username,$password,$database);

    $conexion->isConnected();

    return $conexion;
  


     

