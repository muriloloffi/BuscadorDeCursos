# BuscadorDeCursos

## [PHP code practice] 

Simple HTTP client that fetches content lists from a specified domain and presents through command line shell.

## Downloading package

Inside the project folder you want to add this package, type in the command line:

```console
$ composer require muriloloffi/buscador-cursos
```

## Usage example

Execute a php file with the following code:

```console
<?php

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new BuscadorDeCursos($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
```
