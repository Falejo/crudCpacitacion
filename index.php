<?php
include("config/config.ini.php");
include("modelo/usuarioClass.php");



$usuarios = new Usuario(); 


  if(isset($_POST['user']) && empty($_POST['cod_usuario'])){

      $user = $_POST['user'];
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
    
      $usuarios->agregar($user,$nombre,$email);

      exit();

  }else if(isset($_POST['cod_usuario'])){

      $cod_usuario = $_POST['cod_usuario'];
      $user = $_POST['user'];
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];

      $usuarios->actualizarUsuario($user,$nombre,$email,$cod_usuario);

      exit();

  }

//Lista los usuarios de la BD    
    $listarUsuarios = $usuarios->consultar();



    $smarty->assign("usuarios", $listarUsuarios);
    $smarty->display("registrarUsuario.tpl");



