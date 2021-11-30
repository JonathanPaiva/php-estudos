<?php

namespace Alura\BuscadorDeCursos;

//require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    /** 
     * @var ClientInterface
     */
    private $httpClient;
    /** 
     * @var Crawler
     */
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {

        $resposta = $this->httpClient->request('GET',$url);

        $html = $resposta->getBody();

        $this->crawler->addHtmlContent($html);

        $elementosCuros = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];

        foreach ($elementosCuros as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;

    }
}