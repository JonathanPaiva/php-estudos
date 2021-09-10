<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver a partir de 18 anos!" . PHP_EOL;

//comparação 
/*
Os operadores de comparação
igual ==
diferente !=
maior >
menor <

ou  || - or
e - end - &&

*/

//estrutura de decisão
if ($idade >= 18 ) 
{    
    echo "Você tem $idade anos. Pode entrar";
}
else
{
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Até Logo!";
