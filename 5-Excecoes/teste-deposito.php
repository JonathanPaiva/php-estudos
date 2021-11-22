<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular, SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF, Endereco, PessoaNomeInvalidoException};

try {
$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'abc',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    ));
} catch(PessoaNomeInvalidoException $mensagem){
    echo "Nome Inválido!";
    //echo $mensagem->getMessage();
}

exit();

try {
    $conta->deposita(100);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo!";
}
