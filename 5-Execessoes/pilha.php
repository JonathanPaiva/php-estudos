<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    
    try {
        funcao2();
    //pode ser utilizado multi catch, utilizando o 'pipe' para separar os erros ou exceções
    } catch ( RuntimeException | DivisionByZeroError $erroOuExcecao) {
        //Tratamento de erros ou excessões, exibindo a mensagem padrão, linha e caminho. 
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        echo $erroOuExcecao->getLine() . PHP_EOL;
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }

    //pode ser utilizado um comando throw para lançar a chamada de uma excessão.
    throw new RuntimeException(
        'mensagem',
        0,
        $erroOuExcecao
    );

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    //Erro sendo exibido - Função divide o parâmetro 1 pelo 2
    $divisao = intdiv(5,0);

    //Execessão sendo exibido - função cria um array fixo de acordo com a quantidade de posições no parâmetro
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
