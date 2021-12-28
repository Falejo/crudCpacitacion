<?php
/* Smarty version 3.1.39, created on 2021-12-28 16:29:18
  from 'C:\xampp\htdocs\capacitacion\templates\registrarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61cb2d4e563442_26057868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06880c754459da757ea5c2d8c4d886e9fc204152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\capacitacion\\templates\\registrarUsuario.tpl',
      1 => 1640704622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cb2d4e563442_26057868 (Smarty_Internal_Template $_smarty_tpl) {
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


                        <td>
                           <!-- <button data-id_persona="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_persona'];?>
" class="btn btn-primary actualizar"><span
                                    class="glyphicon glyphicon-pencil"></span></button>
                            <button data-id_persona="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_persona'];?>
" class="btn btn-danger borrar"><span
                                    class="glyphicon glyphicon-trash"></span></button>-->

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

</html><?php }
}
