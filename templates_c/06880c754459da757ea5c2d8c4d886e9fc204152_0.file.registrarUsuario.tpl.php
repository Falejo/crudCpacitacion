<?php
/* Smarty version 3.1.39, created on 2021-12-28 20:22:03
  from 'C:\xampp\htdocs\capacitacion\templates\registrarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61cb63db7c35c8_22982621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06880c754459da757ea5c2d8c4d886e9fc204152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\capacitacion\\templates\\registrarUsuario.tpl',
      1 => 1640713003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cb63db7c35c8_22982621 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

                    <button style="display:none" type="submit" name="actualizar" id="editar_usuario"
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>

                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['cod_usuario'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['user'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['cod_perfil'];?>
</td>
                        


                        <td>
                            <button data-cod_usuario="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['cod_usuario'];?>
" class="btn btn-primary actualizar"><span
                                    class="glyphicon glyphicon-pencil"></span></button>
                            

                        </td>

                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>

</main>

<!--IMPORTACION ARCHIVOS JAVASCRIPT -->



<?php echo '<script'; ?>
 src="librerias/js/jquery.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="librerias/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="librerias/DataTables/datatables.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/funciones.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="librerias/pluginSweet/SweetAlert/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>


<?php }
}
