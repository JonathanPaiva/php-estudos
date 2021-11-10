<?php

namespace Alura;

require 'autoload.php';

/* Não é necessário o uso do require quando se configura o autoloader
require 'Calculadora.php';
require 'ArraysUtils.php';
*/

//Configuração padrão, o uso do array poderia ser feito para armazenar as informações das notas, segue exemplos abaixo dos comentários. 
/*
$notaPortugues = 9;
$notaMatematica = 10;
$notaGeografia = 3;
$notaHistoria = 5;
$notaQuimica = 8;

echo "<p>Nota de Português é: $notaPortugues</p>";
echo "<p>Nota de Matemática é: $notaMatematica</p>";
echo "<p>Nota de Geografia é: $notaGeografia</p>";
echo "<p>Nota de História é: $notaHistoria</p>";
echo "<p>Nota de Química é: $notaQuimica</p>";

$media = ($notaPortugues + $notaMatematica + $notaGeografia + $notaHistoria + $notaQuimica) / 5;

echo "<p>Média é: $media</p>";
*/

$notas = [9,10,3,5,8];

//pode ser separado em arquivos para executar ações, definição de como seria a rotina toda em um único arquivo. 
/*
echo "<p>Nota de Português é: $notas[0]</p>";
echo "<p>Nota de Matemática é: $notas[1]</p>";
echo "<p>Nota de Geografia é: $notas[2]</p>";
echo "<p>Nota de História é: $notas[3]</p>";
echo "<p>Nota de Química é: $notas[4]</p>";

//sizeof() verificar o tamanho do array e retorno um int
$quantidadeNotas = sizeof($notas);

$somaNotas = 0;

for( $i = 0; $i < $quantidadeNotas; $i++){
    $somaNotas = $somaNotas + $notas[$i];
}

$media = $somaNotas / $quantidadeNotas;

echo "<p>Média é: $media</p>";
*/

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "<p>Média é: $media</p>";
} else {
    echo "Não foi possível calcular a média";
}

echo "<p>------------------------------------------------</p>";

//uso de arrays para exibição de saldos, ordenação de array
$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

echo "<pre>";

foreach ($saldos as $saldo) {
    echo "<p> O Saldo é: R$ $saldo </p>";
}

//Função "sort" serve para ordenar do menor ao maior dentro de um array
sort($saldos);

echo "Menor Saldo é: R$ $saldos[0]";

echo "</pre>";

echo "<p>------------------------------------------------</p>";

//transformar strings em arrays e arrys em strings
$nomes = "Giovanni, João, Maria, Pedro";

//Função converte uma string em array, necessário setar o separador e a string origem.
$arraysNomes = explode(", ",$nomes);

//Apenas para checar se a informação estava correta
//var_dump($arraysNomes);

foreach ($arraysNomes as $nome) {
    echo "<p> Olá, $nome </p>";
}

$nomesJuntos = implode(",",$arraysNomes);

Echo "Nomes Juntos: $nomesJuntos";

echo "<p>------------------------------------------------</p>";

$correntistas_e_compras = [
    "Giovanni",
     12,
    "Maria",
     25,
    "Luis",
    "Luísa",
    "12"
    ];

//necessário os '::' devido a ser uma função estática
ArraysUtils::remover("Giovanni",$correntistas_e_compras);

echo "<pre>";
var_dump($correntistas_e_compras);
echo "</pre>";

echo "<p>------------------------------------------------</p>";