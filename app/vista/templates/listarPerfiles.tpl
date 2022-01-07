<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI CRUD</title>
     <!-- Estilos Bootstrap-->
     <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
     <!--Estilos Sweet Alert-->
    <link rel="stylesheet" href="app/librerias/pluginSweet/SweetAlert/dist/sweetalert2.min.css">
    <!-- DataTables -->   
    <link rel="stylesheet" type="text/css" href="vendor/dataTables/datatables/media/css/jquery.dataTables.min.css">

</head>


<div class="container">

        <br>

        <h1>PERFILES</h1>
        <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo Perfil</th>                    
                    <th>Nombre</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$perfiles item=perfil}

                    <tr>

                        <td>{$perfil.cod_perfil}</td>                        
                        <td>{$perfil.nombre}</td>
                        <td>{$perfil.activo}</td>
                                         
                    </tr>

                {/foreach}

            </tbody>
        </table>
    </div>



<!--IMPORTACION ARCHIVOS JAVASCRIPT -->
<script src="vendor/components/jquery/jquery.min.js"> </script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/dataTables/datatables/media/js/jquery.dataTables.min.js"> </script>
<script src="app/controlador/js/funciones.js"> </script>
<script src="app/librerias/pluginSweet/SweetAlert/dist/sweetalert2.all.min.js"></script>