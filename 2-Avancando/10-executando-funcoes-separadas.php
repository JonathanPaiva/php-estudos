<?php

/*
//pode ser incluído arquivos a serem executados de forma separada, necessário informar a expressão abaixo:
*/
//Com o 'include' vai ser apenas incluído o arquivos descrito na chamada sem tipo de validação para os demais código do arquivo, caso não esteja com o nome do arquivo correto por exemplo, vai apresentar o que o arquivo não foi encontrato e continuar o código apresentando erros nas demais instruções dependentes desse arquivo.
/*
include '9-execucoes-funcoes.php';
*/

//com o 'require' vai ser incluído o arquivo em questão e feito a validação, caso ele não exista no programa será apresentado o erro no require.
/*
require '9-execucoes-funcoes.php';
*/

/*php podem existe 3 tipos de notificações.
> E_WARNING | é um aviso de que o PHP não conseguiu realizar alguma instrução
> E_NOTICE | ocorre quando o PHP encontra algum problema, mas consegue contorná-lo.
> E_ERROR | é o PHP informando que ocorreu um problema e não conseguirá continuar com a execução
*/

//caso tenha sido incluído o mesmo arquivo várias vezes com o require apresentará erro, mesma situação ocorre com o include
/*
require '9-execucoes-funcoes.php';
require '9-execucoes-funcoes.php';
*/

//correto seria utilizar o 'require_once', mesmo com a inclusão de dois arquivos iguais o arquivo em questão só é inlcuído uma vez no código atual.
require_once '9-execucoes-funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular'=> 'Maria', 
        'saldo'=>10000
    ], 

    '123.456.789-11' => [
        'titular'=> 'Alberto',
        'saldo'=> 300
    ], 

    '123.256.789-12' => [
        'titular'=> 'Vinicius',
        'saldo'=> 100
    ]
];

//instrução de saque
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

//instrução de deposito
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 900);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

//função 'unset' remove variáveis da memória, fazendo assim com que elas não aparecam mais na listagem disponíveis para visualização.
unset($contasCorrentes['123.456.789-11']);
/*
foreach ($contasCorrentes as $cpf => $conta) {

    //pode ser feito uma forma mais simples pra capturar dados de um array
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    
    exibeMensagem("$cpf - $titular - Saldo: $saldo");
}
*/

/*
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
*/

//expressão abaixo terminar de usar códigos em php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
       <?php foreach($contasCorrentes as $cpf => $conta) { ?>

            <dt>
                <h3> 
                    <?= $conta['titular']; ?> - <?= $cpf; ?> 
                </h3>
            </dt>
            
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>

        <?php } ?>

    </dl>
</body>
</html>