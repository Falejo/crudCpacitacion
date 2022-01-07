<?php

include("./app/config/config.ini.php");



class Perfil{

    private $conexion;



    public function __construct()
    {
        global $conexion;
        $this->conexion= $conexion;
    }

    public function consultar()
    {

        $resultado = $this->conexion->Execute("SELECT cod_perfil, nombre, activo FROM perfil ORDER BY cod_perfil DESC LIMIT 5");

        return $resultado;
    }

}