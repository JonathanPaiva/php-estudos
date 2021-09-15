<?php

//Declarações de Sub Rotinas sem retorno
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

//Declarações de funções com retorno de dados 
function getSomatorio2($x)
{
    return $x + 2;
}

/* 
//Função finaliza código executado até este ponto. 
exit();
*/

function sacar($conta, $valorASacar) 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

//Declaração de funções com definições específicas dos tipos de dados de parâmetros e de retorno.
function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
} 

$contasCorrentes = [
    '123.456.789-10' => [
        'titular'=> 'Maria', 
        'saldo'=>10000
    ], 

    '123.456.789-11' => [
        'titular'=> 'Alberto',
        'saldo'=> 300
    ], 

    '123.26.789-12' => [
        'titular'=> 'Vinicius',
        'saldo'=> 100
    ]
];

//instrução de saque
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

//instrução de deposito
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 900);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " - " . $conta['titular'] . ' - Saldo: ' . $conta['saldo']);

}

