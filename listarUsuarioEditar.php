<?php 
    include("config/config.ini.php");    
    include("modelo/usuarioClass.php");


    $usuario = new Usuario;


    if(isset($_POST['cod_usuario'])){

        $cod_usuario = $_POST['cod_usuario'];

        $usuario->listarUsuario($cod_usuario);

    }
    
?>