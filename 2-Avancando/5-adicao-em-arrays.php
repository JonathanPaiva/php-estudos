<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

//para adicionar mais dados num array pode ser apenas incluído as informação da seguinte forma:
//informação do índice ficando em branco o php irá adicionar o valor informado no próximo índice disponível - caso atual seria o '7'
$idadeList[] = 20;

//pode ser reduzido o código descrevendo o conjunto de arrays da seguinte forma abaixo: 
$contasCorrentes = [
    '115-487-88' => [
        'titular'=> 'Vinicius', 
        'saldo'=>1000
    ], 

    '224-457-48' => [
        'titular'=> 'Maria',
        'saldo'=>10000
    ], 

    '339-952-45' => [
        'titular'=> 'Alberto',
        'saldo'=>300
    ]
];

/*num conjunto de arrays associativos também segue a mesma regra de adição, 
necessário incluir o dados com colchetes vazios e será adicionado no próximo índice disponível, porém caso seja 'string' será necessário informar o valor de índice, se não, será lançado como próximo índice numérico disponível, no caso atual '0'
*/
$contasCorrentes[] = [
    'titular' => 'Claudia 3',
    'saldo' => 5002
];

//correto seria dessa forma
$contasCorrentes['445-577-86'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

/*porém existe a necessidade de consulta a informação por índice do conjunto de arrays pode ser definido da seguinte forma:
*/
                          //índice  //valor
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}