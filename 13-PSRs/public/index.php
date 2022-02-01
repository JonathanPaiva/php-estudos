<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;

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

//utilizando as psrs
$psr17Factory = new Psr17Factory();

$creator = new ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$request = $creator->fromGlobals();

$calsseContraladora = $rotas[$caminho];

/**
 * @InterfaceControladorRequisicao $controlador
 */
$controlador = new $calsseContraladora();

$resposta = $controlador->processaRequisicao($request);

foreach ($resposta->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}

echo $resposta->getBody();

