<?php
    include("librerias/smarty/config.ini.php");

    
        if(isset($_POST['user']) && empty($_POST['cod_usuario'])){

            $user = $_POST['user'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            //$cod_perfil = $_POST['cod_perfil'];

            $query = "INSERT INTO usuario (user, nombre, fecha_vencimiento, cod_cargo, email) 
            VALUES ('$user', '$nombre', NULL, NULL, '$email')";
            $result = mysqli_query($conexion, $query);

            if(!$result){
                $arr = array("resultado" => 0 , "mensaje" => "Error en la Inserción" );
                echo json_encode($arr);

            } else{
                $arr = array("resultado" => 1 , "mensaje" => "Datos guardados con éxito" );
                echo json_encode($arr);
            }        
            exit();

        } 




        //Lista usuarios en la tabla
        $query = "SELECT cod_usuario, user, nombre, email, cod_perfil FROM usuario ORDER BY cod_usuario DESC LIMIT 10";
        $arrayUsuarios = array ();

        $result = mysqli_query($conexion, $query);

        while ($consulta = mysqli_fetch_assoc($result)){
            $arrayUsuarios[] = $consulta;
        } 

        $smarty -> assign("usuarios", $arrayUsuarios);
        $smarty -> display("registrarUsuario.tpl");


?>

   