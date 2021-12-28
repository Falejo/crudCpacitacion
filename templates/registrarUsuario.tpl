<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI CRUD</title>


    <!-- Estilos Bootstrap-->
    <link rel="stylesheet" href="librerias/css/bootstrap.min.css">

    <!-- Estilos Sweet Alert-->
    <link rel="stylesheet" href="librerias/pluginSweet/SweetAlert/dist/sweetalert2.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="librerias/DataTables/datatables.min.css">




</head>


<main class="container">
    <div class="container">
        <br>

        <h1>USUARIOS</h1>
        <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo Usuario</th>
                    <th>User</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$usuarios item=usuario}

                    <tr>

                        <td>{$usuario.cod_usuario}</td>
                        <td>{$usuario.user}</td>
                        <td>{$usuario.nombre}</td>


                        <td>
                           <!-- <button data-id_persona="{$usuario.id_persona}" class="btn btn-primary actualizar"><span
                                    class="glyphicon glyphicon-pencil"></span></button>
                            <button data-id_persona="{$usuario.id_persona}" class="btn btn-danger borrar"><span
                                    class="glyphicon glyphicon-trash"></span></button>-->

                        </td>

                    </tr>

                {/foreach}

            </tbody>
        </table>
    </div>

</main>

<!--IMPORTACION ARCHIVOS JAVASCRIPT -->

<script src="librerias/js/jquery.js"> </script>
<script src="librerias/js/bootstrap.min.js"></script>
<script type="text/javascript" src="librerias/DataTables/datatables.min.js"> </script>
<script src="js/funciones.js"> </script>
<script src="librerias/pluginSweet/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>