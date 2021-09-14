<?php

//Criação de um array associativo define o índice de acordo com a declaração do dado informado no índice seguido do '=>' informando o valor do índice desse array
$conta1 = [
    'titular'=> 'Vinicius', 
    'saldo'=>1000
];

$conta2 = [
    'titular'=> 'Maria',
    'saldo'=>10000
];

$conta3 = [
    'titular'=> 'Alberto',
    'saldo'=>300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

//pode ser consultado um valor em um array associativo da seguinte forma:
echo $conta1['titular'] . PHP_EOL;

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

