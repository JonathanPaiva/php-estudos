<?php

$numeros = [1,2,3,4,5];
$multiplicador = 2;

//Funções anônimas não tem acesso ao escopo externo 
                                    //Sendo necessário o uso do 'use $variavel' para identificar a informação lançada.
$resultado = array_map( function($item) use($multiplicador) {
    return $item * $multiplicador;
}, $numeros);

var_dump($resultado);


/*
Com o uso da 'Arrow Functions' pode ser feito dessa forma.
*/
$resultado = array_map(fn ($item)=> $item * $multiplicador, $numeros);

var_dump($resultado);
//Retornar o mesmo resultado, porém necessário que a instrução para o uso da Arrow Function dessa forma seja tudo executado em uma linha, o que é retornado é o resultado do que está sendo executado. 