<?php

require_once("./config/config.ini.php");

class Usuario {
    
   private $db;
   private $arrayUsuarios;

  
    public function __construct(){

        $this->db=Conectar::conexion();
        $this->arrayUsuarios = array();
    }

    
    public function agregar($user, $nombre, $email){
        
        $resultado = $this->db->query("INSERT INTO usuario (user, nombre, fecha_vencimiento, cod_cargo, email) 
        VALUES ('$user', '$nombre', NULL, NULL, '$email')");

        if(!$resultado){
            $arr = array("resultado" => 0 , "mensaje" => "Error en la Inserción" );
            echo json_encode($arr);

        } else{
            $arr = array("resultado" => 1 , "mensaje" => "Datos guardados con éxito" );
            echo json_encode($arr);
        }   
    }


    public function consultar(){        

        $query = "SELECT cod_usuario, user, nombre, email, cod_perfil FROM usuario ORDER BY cod_usuario DESC LIMIT 5";
        
        $resultado = mysqli_query($this->db, $query);

        while ($consulta = mysqli_fetch_assoc($resultado)){
            $this->arrayUsuarios[] = $consulta;
                       
        } 

        return $this->arrayUsuarios;
       
    }

    public function actualizarUsuario($user,$nombre,$email, $cod_usuario){

          $resultado = $this->db->query("UPDATE usuario set user = '$user', nombre = '$nombre', email= '$email' where cod_usuario = $cod_usuario");

            if(!$resultado){
                
                $arr = array("resultado" => 0 , "mensaje" => "Error en la Inserción" );
                echo json_encode($arr);
            } else {
                
                $arr = array("resultado" => 1 , "mensaje" => "Datos actualizados con éxito" );
                echo json_encode($arr);
            }
    }



    public function listarUsuario($cod_usuario){  

        $query = "SELECT cod_usuario, user, nombre, email FROM usuario WHERE cod_usuario = $cod_usuario";
        
         $result = mysqli_query($this->db, $query);        
        
        if (mysqli_num_rows($result) == 1) {
        
            $data = mysqli_fetch_assoc($result);
            echo json_encode($data, JSON_UNESCAPED_UNICODE);         

         }else{
                echo 'error';                      
        }  
        
    }     


   

}