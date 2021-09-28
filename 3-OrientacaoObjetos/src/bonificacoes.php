<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Funcionario, Gerente};
use Alura\Banco\Services\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor( new CPF('123.456.789-11'),'Teste Funcionario 1','Auxiliar',1000);

$funcionarioDesenvolvedor = new Desenvolvedor( new CPF('123.456.789-99'),'Desenvolvedor Teste','Desenvolvedor',2000); 

$funcionarioGerente = new Gerente( new CPF('788.898.999-13'),'Jurema Gerente','Gerente',3000);

$funcionarioDiretor = new Diretor( new CPF('788.898.999-15'),'Diretor Belarmino','Diretor',5000);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->setBonificacaoDe($umFuncionario);
$controlador->setBonificacaoDe($funcionarioDesenvolvedor);
$controlador->setBonificacaoDe($funcionarioGerente);
$controlador->setBonificacaoDe($funcionarioDiretor);

echo $controlador->getTotalBonificacoes();
