<?php

//Fórmula IMC - Peso / (Altura * Altura)

/*
Menor que 18.5 - Abaixo do peso ;
Entre 18.5 e 24.9 - Peso normal ;
Entre 25.0 e 29.9 - Acima do Peso ;
Entre 30.0 e 34.9 - Obesidade Grau 1 ;
Entre 35.0 e 39.9 - Obesidade Grau 2 ;
Acima de 40 - Obesidade Grau 3
*/

$peso = 84.00;
$altura = 1.75; 
$resultado = $peso / ($altura * $altura);

if ($resultado < 18.5){
    $mensagem = " - Abaixo do Peso";
    
}elseif ($resultado >= 18.5 && $resultado <=24.9){
    $mensagem = " - Peso Normal";

} elseif ($resultado >= 25 && $resultado <=29.9){
    $mensagem = " - Acima do Peso";

}elseif ($resultado >= 30 && $resultado <=34.9){
    $mensagem = " - Obesidade Grau 1";

}elseif ($resultado >= 35 && $resultado <=39.9){
    $mensagem = " - Obesidade Grau 2";

}elseif ($resultado >= 40){
    $mensagem = " - Obesidade Grau 3";

}

echo $resultado . $mensagem;