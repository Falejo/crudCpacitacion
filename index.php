<?php
require_once __DIR__ . '/vendor/autoload.php';

require_once("./app/config/config.ini.php");
require_once("./app/controlador/usuarioController.php");
require_once('./vendor/smarty/smarty/libs/Smarty.class.php');

class Index
{

    private $controller;
    private $smarty;

    function __construct()
    {

        global $smarty;
        $this->smarty = $smarty;
        $this->controller = new UsuarioController();

        $this->routes($_REQUEST["funcion"], $_REQUEST);
    }


    public function consultar()
    {
        $listarUsuarios = $this->controller->consultar();

        $this->smarty->assign("usuarios", $listarUsuarios);
        $this->smarty->display("registrarUsuario.tpl");
    }


    public function listarUsuarioEditar($data)
    {

        if (isset($data["cod_usuario"])) {

            echo $this->controller->listarUsuario($data["cod_usuario"]);
        }
    }


    public function agregarEditarUsuario($data)
    {

        if (isset($data['user']) && empty($data['cod_usuario'])) {

            $user = $data['user'];
            $nombre = $data['nombre'];
            $email = $data['email'];

            echo $this->controller->agregar($user, $nombre, $email);

            exit();
        } else if (isset($data['cod_usuario'])) {

            $cod_usuario = $data['cod_usuario'];
            $user = $data['user'];
            $nombre = $data['nombre'];
            $email = $data['email'];

            echo $this->controller->actualizarUsuario($user, $nombre, $email, $cod_usuario);

            exit();
        }
    }


    public function routes($funcion, $data)
    {

        if (method_exists($this, $funcion)) {

            $this->$funcion($data);
        } else {

            $this->consultar();
        }
    }
}

$index = new Index();
