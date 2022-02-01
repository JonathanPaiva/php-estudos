<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface
    {
        
        $html = "Teste";

        $psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();

        $responseBody = $psr17Factory->createStream('Hello world');
        $response = $psr17Factory->createResponse(200)->withBody($responseBody);
        (new \Laminas\HttpHandlerRunner\Emitter\SapiEmitter())->emit($response);

//        return new Response(200,[],$html);
        
    }

}