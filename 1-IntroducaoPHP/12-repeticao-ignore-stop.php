<?php

$contador = 1;

/* Incrementa mais 1 valor na variável em questão.
$contador = $contador + 1;
$contador += 1;
$contador++;
*/
for ($contador = 1; $contador <=15;$contador++){

    //na prática processo pode ser feito de diferentes formas, segue abaixo exemplos: Comandos para ignorar determinada linha com determinado dado.
    if ($contador == 13) {
    } else {
        echo "#$contador" . PHP_EOL;
    }
    //---------------------------------------------------
    
    if ($contador != 13) {
        echo "#$contador" . PHP_EOL;
    }
    //---------------------------------------------------
    
    if ($contador == 13){
        //Expressão pula a linha do for/while do 
        continue;
    }
    //---------------------------------------------------

    //Comando para parar a execução da repetição.
    if ($contador == 13){
        //Expressão pula a linha do for/while do 
        break;
    }

    echo "#$contador" . PHP_EOL;


/*Existem algumas variações de laços, dentre elas:
1 - while que possui uma condição de entrada

2 - do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)

3 - for que possui a declaração de uma variável, uma condição entrada e o increment

- Dentro do bloco do laço podemos pular uma interação com o comando continue

- Com o comando break podemos sair do laço

- A variável contador normalmente se chama i
*/

}