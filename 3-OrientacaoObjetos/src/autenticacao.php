<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario,Diretor,Gerente};
use Alura\Banco\Services\Autenticador;

require_once 'autoload.php';

$autenticador = New Autenticador();
$diretor = new Diretor(new CPF("445.556.667-11"),"Joao da Silva",10000);

$autenticador->tentarLogin($diretor, "11445");






