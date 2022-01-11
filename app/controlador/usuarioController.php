<?php

include("./app/modelo/usuarioClass.php");

class UsuarioController
{

    private $usuarioModel;
    

    public function __construct()
    {

        $this->usuarioModel = new Usuario();
       
    }

    public function agregar($user, $nombre, $email)
    {

        $resultado = $this->usuarioModel->agregar($user, $nombre, $email);

        if (!$resultado) {
            $arr = array("resultado" => 0, "mensaje" => "Error en la Inserción");
            echo json_encode($arr);
        } else {
            $arr = array("resultado" => 1, "mensaje" => "Datos guardados con éxito");
            echo json_encode($arr);
        }
    }

    public function consultar()
    {

        $resultado = $this->usuarioModel->consultar();

        if ($resultado) {

            while (!$resultado->EOF) {

                $arrayUsuarios[] = [
                    "cod_usuario" => $resultado->fields("cod_usuario"), "user" => $resultado->fields("user"),
                    "nombre" => $resultado->fields("nombre"), "email" => $resultado->fields("email"), "cod_perfil" => $resultado->fields("cod_perfil")
                ];

                $resultado->MoveNext();
            }
        }

        return $arrayUsuarios;
    }



    public function actualizarUsuario($user, $nombre, $email, $cod_usuario)
    {

        $resultado = $this->usuarioModel->actualizarUsuario($user, $nombre, $email, $cod_usuario);
       
        //echo $resultado;

        if (!$resultado) {

            $arr = array("resultado" => 0, "mensaje" => "Error en la Inserción");
            echo json_encode($arr);
        } else {

            $arr = array("resultado" => 1, "mensaje" => "Datos actualizados con éxito");
            echo json_encode($arr);
        }
    }


    public function listarUsuario($cod_usuario)
    {

        $resultado = $this->usuarioModel->listarUsuario($cod_usuario);
        $mensaje = "error";

        if ($resultado["total_filas"] > 0) {

            $mensaje = $resultado["data"];
        }

        return $mensaje;
    }
}
