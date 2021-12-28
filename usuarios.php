<?php
    include("librerias/smarty/config.ini.php");

    

        $query = "SELECT cod_usuario, user, nombre FROM usuario LIMIT 10";

        $arrayUsuarios = array ();

        $result = mysqli_query($conexion, $query);

        while ($consulta = mysqli_fetch_assoc($result)){
            $arrayUsuarios[] = $consulta;
        } 

        $smarty -> assign("usuarios", $arrayUsuarios);
        $smarty -> display("registrarUsuario.tpl");

    


    /**
     if(isset($_POST['cod_usuario'])){

        $cod_usuario = $_POST['cod_usuario'];

        $query = "SELECT cod_usuario, user, nombre FROM usuario LIMIT 10";

        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) == 1){
            
            $data = mysqli_fetch_assoc($result);
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit;
        }else{
            echo 'error';
            exit;
        }
     */