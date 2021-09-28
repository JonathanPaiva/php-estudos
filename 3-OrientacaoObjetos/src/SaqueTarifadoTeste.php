<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta,Titular,ContaCorrente,ContaPoupanca};
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$conta = new ContaCorrente( 
            new Titular( 
                new CPF("777.888.999-10"),"Teste de Saque",
                New Endereco("Cidade Teste","Bairro Teste", "Rua Teste", "1234")));

$conta->depositar(1000);

$conta->sacar(100);

echo $conta->getSaldo();


