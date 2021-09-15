<?php

/*
Informações de chaves em arrays associativos só suportam 'strings' ou 'inteiros'
Caso haja um número inteiro numa string ele vai fazer a conversão para inteiro
*** Apenas para conhecimento ***
*/

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}