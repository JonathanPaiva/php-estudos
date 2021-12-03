#!/usr/bin/env php
<?php 

require 'vendor/autoload.php';
//require 'src/Buscador.php';

/*
Informação '#!/usr/bin/env php' no início do arquivo representa que o arquivo pode ser chamado via linha de comando com o 'php vendor\bin\buscador-cursos. php' - sendo necessário incluir tratamentos no composer.json

Teste::metodoTeste();

Teste2::metodoTeste2();

exibirMensagem();

exit();
*/

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client(['base_uri'=>'https://www.alura.com.br/',
                        'verify'=> false]);
$crawler = new Crawler();

$buscador = new Buscador($cliente, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
    exibirMensagem($curso);
}
