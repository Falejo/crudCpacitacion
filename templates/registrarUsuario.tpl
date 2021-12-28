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

        <h1 class="col text-center">Gestión De Usuario</h1>

        <br>
        <form id="form_registrar" method="POST" autocomplete="off">

            <div class="row">

                <div class="col-sm-1 col-md-offset-2">
                    <label><b>User: </b></label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="user" id="user" class="form-control" autofocus required>
                </div>

                <div class="col-sm-1">
                    <label><b>Nombre: </b></label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-1 col-md-offset-2">
                    <label><b>Email: </b></label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <!--
                <div class="col-sm-1">
                <label><b>cod. perfil: </b></label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="perfil" id="perfil" class="form-control" required>
                </div>-->
            </div>

            <br>
            

            <br>
            <div class="row">

                <input type="hidden" name="cod_usuario" id="cod_usuario" value="">

                <div class="col text-center">

                    <button type="submit" id="save_usuario" class="btn btn-success btn-lg"><span
                            class="glyphicon glyphicon-saved"> </span> Guardar </button>

                    <button style="display:none" type="submit" name="editar_usuario" id="editar_usuario"
                        class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-edit"> </span> Editar</button>
                </div>
            </div>

        </form>
    </div>



    <div class="container">
        <br>

        <h1>USUARIOS</h1>
        <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo Usuario</th>
                    <th>User</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Codigo perfil</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$usuarios item=usuario}

                    <tr>

                        <td>{$usuario.cod_usuario}</td>
                        <td>{$usuario.user}</td>
                        <td>{$usuario.nombre}</td>
                        <td>{$usuario.email}</td>
                        <td>{$usuario.cod_perfil}</td>
                        


                        <td>
                            <button data-cod_usuario="{$usuario.cod_usuario}" class="btn btn-primary actualizar"><span
                                    class="glyphicon glyphicon-pencil"></span></button>                            

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


