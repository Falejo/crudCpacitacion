<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'app/controlador/usuarioController.php';




$app->get('/api/usuarios', function (Request $request, Response $response) {

    $controler = new UsuarioController();

    $result = $controler->consultar();
    echo json_encode($result);
});

$app->put('/api/editarUsuario/{id}', function (Request $request, Response $response) {

    $cod_usuario = $request->getAttribute('id');
    $user = $request->getParam('user');
    $nombre = $request->getParam('nombre');
    $email = $request->getParam('email');

    $controler = new UsuarioController();

    $controler->actualizarUsuario($user, $nombre, $email, $cod_usuario);

    
});
