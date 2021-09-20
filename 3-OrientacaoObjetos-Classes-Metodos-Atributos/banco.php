<?php

require_once '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Conta.php';

$primeiraConta = new Conta("123.456.789-10","Teste");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

var_dump($primeiraConta);

