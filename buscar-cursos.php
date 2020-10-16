<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Muriloloffi\BuscadorDeCursos\BuscadorDeCursos;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();


$buscador = new BuscadorDeCursos($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    exibeMensagem($curso);
}
