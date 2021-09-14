<?php

//pode ser reduzido o código descrevendo o conjunto de arrays da seguinte forma abaixo: 
$contasCorrentes = [
    11548788 => [
        'titular'=> 'Vinicius', 
        'saldo'=>1000
    ], 

    22445748 => [
        'titular'=> 'Maria',
        'saldo'=>10000
    ], 

    33995245 => [
        'titular'=> 'Alberto',
        'saldo'=>300
    ]
];

/*
//pode ser consultado de forma geral cada array da seguinte forma abaixo:
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}
*/

/*porém existe a necessidade de consulta a informação por índice do conjunto de arrays pode ser definido da seguinte forma:
*/
                          //índice  //valor
foreach ($contasCorrentes as $cpf => $conta) {
    //dessa forma pode ser exibido só o índice geral
    echo $cpf . PHP_EOL;

    //ou pode ser acessado o valores contidos nos índices
    echo $conta['titular'] . PHP_EOL;
}