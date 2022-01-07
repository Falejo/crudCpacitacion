<?php
include("./app/modelo/perfilClass.php");
include("./app/config/config.ini.php");;

class PerfilController
{

    private $perfilModel;
   

    public function __construct()
    {

        $this->perfilModel = new Perfil();
    }

    public function consultarPerfiles()
    {

        $resultado = $this->perfilModel->consultar();

        if ($resultado) {

            while (!$resultado->EOF) {

                $arrayUsuarios[] = [
                    "cod_perfil" => $resultado->fields("cod_perfil"), "nombre" => $resultado->fields("nombre"),
                    "activo" => $resultado->fields("activo")];

                $resultado->MoveNext();
            }
        }

        return $arrayUsuarios;
    }

}
