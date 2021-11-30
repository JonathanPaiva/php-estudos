<?php 

require 'vendor/autoload.php';
//require 'src/Buscador.php';

Teste::metodoTeste();

Teste2::metodoTeste2();

exibirMensagem();

exit();

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client(['base_uri'=>'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($cliente, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');


foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}
