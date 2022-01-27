<?php

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho,$rotas)){
    http_response_code(404);
    exit();
}

$calsseContraladora = $rotas[$caminho];

/**
 * @InterfaceControladorRequisicao $controlador
 */
$controlador = new $calsseContraladora();

$controlador->processaRequisicao();