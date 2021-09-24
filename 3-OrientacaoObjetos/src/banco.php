<?php

/*
Com o uso de require_once em todos os arquivos ficaria inviável de ser descrito todos os arquivos necessários na ordem correta num projeto maior. Então pode ser utilizado uma função para capturar o nameSpace de cada arquivo e assim executa-lo corretamente.

require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Endereco.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Modelo\Conta\Titular.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\CPF.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Modelo\Conta\Conta.php';
*/

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$end1 = new Endereco("Cidade Teste","Bairro Teste", "Rua Teste","123");
$titular1 = new Titular(new CPF("123.456.789-10"),"Teste de Cliente",$end1);
$primeiraConta = new Conta($titular1);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$titular2 =  new Titular( new CPF("445.545.667-10"),"Airton Sena",$end1);
$segundaConta = new Conta($titular2);
$segundaConta->depositar(1000);

$end3 = New Endereco("Santa Rita","Centro", "Rua Alvina", "212");
$titular3 = new Titular( new CPF("123.456.445-11"),"Teste de Cpf Inválido",$end3);

var_dump($primeiraConta);

echo PHP_EOL;

var_dump($segundaConta);

echo PHP_EOL;

echo Conta::getNumeroDeContas();


