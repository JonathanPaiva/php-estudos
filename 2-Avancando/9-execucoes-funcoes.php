<?php

//Declarações de Sub Rotinas sem retorno
function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>'; //PHP_EOL;
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

//declaração de variáveis para alterações de valores dessa forma é alterado uma cópia da informação original.
function titularComLetrasMaiusculas_AlterandoCopia(array $conta)
{
    
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

//com a informação de '&' antes da declaração da variável/parâmetro por referência altera a informação diretamente no valor original, ou seja, não é uma cópia alterada e sim a informação armazenada na variável em questão.
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

//misturar códigos php com html com foco pra exibir informações no navegador
function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}