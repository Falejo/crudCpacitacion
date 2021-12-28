<?php 
    include("librerias/smarty/config.ini.php"); 

        if(isset($_POST['cod_usuario'])){
        
            $cod_usuario = $_POST['cod_usuario'];
        
            $query = "SELECT cod_usuario, user, nombre, email FROM usuario WHERE cod_usuario = $cod_usuario";
        
            $result = mysqli_query($conexion, $query);
        
        
            if (mysqli_num_rows($result) == 1) {
        
            $data = mysqli_fetch_assoc($result);
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit;
        
        
            }else{
                echo 'error';
                exit;        
            }  
        }     
    

?>