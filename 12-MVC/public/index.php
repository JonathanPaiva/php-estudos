<?php

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho,$rotas)){
    http_response_code(404);
    exit();
}

//sempre é necessário iniciar o session_start() antes de qualquer saída, echo, html, etc...
session_start();

//função stripos retorna a posição entre uma string do segundo parâmetro passado, caso não encontre o dado, retorna false.
$rotaLogin = stripos($caminho, 'login');

if (!isset($_SESSION['logado']) && $rotaLogin === false ){
    header('Location: /login');
    exit();
}

$calsseContraladora = $rotas[$caminho];

/**
 * @InterfaceControladorRequisicao $controlador
 */
$controlador = new $calsseContraladora();

$controlador->processaRequisicao();