<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once("./app/config/config.ini.php");
require_once("./app/controlador/perfilController.php");
require_once('./vendor/smarty/smarty/libs/Smarty.class.php');

class IndexPerfiles
{

    private $controller;
    private $smarty;

    function __construct()
    {

        global $smarty;
        $this->smarty = $smarty;
        $this->controller = new PerfilController();

       $this->consultar();
    }

    public function consultar()
    {
        $listarPerfiles = $this->controller->consultarPerfiles();

        $this->smarty->assign("perfiles", $listarPerfiles);
        $this->smarty->display("listarPerfiles.tpl");
    }

}

$indexPerfiles = new IndexPerfiles();