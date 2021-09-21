<?php

require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Conta.php';
require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Titular.php';

$primeiraConta = new Conta( new Titular("123.456.789-10","Teste de Cliente"));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta( new Titular("445.545.667-10","Airton Sena"));
$segundaConta->depositar(1000);

var_dump($primeiraConta);

echo PHP_EOL;

var_dump($segundaConta);

echo PHP_EOL;

echo Conta::getNumeroDeContas();


