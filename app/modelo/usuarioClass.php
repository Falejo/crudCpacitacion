<?php

include("./app/config/config.ini.php");



class Usuario
{

    private $conexion;



    public function __construct()
    {
        global $conexion;
        $this->conexion= $conexion;
    }


    public function agregar($user, $nombre, $email)
    {

        $resultado = $this->conexion->Execute("INSERT INTO usuario (user, nombre, fecha_vencimiento, cod_cargo, email) 
        VALUES ('$user', '$nombre', NULL, NULL, '$email')");

        return $resultado;
    }



    public function listarUsuario($cod_usuario)
    {

        $resultado = $this->conexion->Execute("SELECT cod_usuario, user, nombre, email FROM usuario WHERE cod_usuario = $cod_usuario");

        $dataRetornar = array("total_filas" => $resultado->numRows(), "data" => json_encode($resultado->GetRowAssoc(false)));

        return $dataRetornar;
    }


    public function consultar()
    {

        $resultado = $this->conexion->Execute("SELECT cod_usuario, user, nombre, email, cod_perfil FROM usuario ORDER BY cod_usuario DESC LIMIT 5");

        return $resultado;
    }


    public function actualizarUsuario($user, $nombre, $email, $cod_usuario)
    {

        $resultado = $this->conexion->Execute("UPDATE usuario set user = '$user', nombre = '$nombre', email= '$email' where cod_usuario = $cod_usuario");

        return $resultado;
    }
}
