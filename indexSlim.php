<?php

include './vendor/autoload.php';

$config = ["settings"=>[
    "displayErrorDetails" => true
]];

$app = new \Slim\App($config);

require_once 'app/rutas/usuarios.php';

$app->run();
