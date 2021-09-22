<?php

require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Endereco.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Titular.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\CPF.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Conta.php';

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


