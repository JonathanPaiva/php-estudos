<?php

require 'Calculadora.php';

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