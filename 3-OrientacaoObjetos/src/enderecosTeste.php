<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = New Endereco("Cidade Teste","Bairro Teste","Rua BlaBla","123");

$outroEndereco = new Endereco("Cidade X","Bairro Ssada","Rua bilu","1231412");

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
