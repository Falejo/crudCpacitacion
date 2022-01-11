<?php
/* Smarty version 4.0.0, created on 2022-01-11 14:54:51
  from 'C:\xampp\htdocs\capacitacion\app\vista\templates\listarPerfiles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61dd8c2bd4b485_26382294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed4f0efd0fed0a7780c069a7801b2d1c28b3ce18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\capacitacion\\app\\vista\\templates\\listarPerfiles.tpl',
      1 => 1641565040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd8c2bd4b485_26382294 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfiles']->value, 'perfil');
$_smarty_tpl->tpl_vars['perfil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfil']->value) {
$_smarty_tpl->tpl_vars['perfil']->do_else = false;
?>

                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['perfil']->value['cod_perfil'];?>
</td>                        
                        <td><?php echo $_smarty_tpl->tpl_vars['perfil']->value['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['perfil']->value['activo'];?>
</td>
                                         
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>



<!--IMPORTACION ARCHIVOS JAVASCRIPT -->
<?php echo '<script'; ?>
 src="vendor/components/jquery/jquery.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="vendor/dataTables/datatables/media/js/jquery.dataTables.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="app/controlador/js/funciones.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="app/librerias/pluginSweet/SweetAlert/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
><?php }
}
