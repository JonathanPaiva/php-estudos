<?php 

namespace Alura;

class Calculadora
{

    public function calculaMedia(array $notas): ?float
    {
        //sizeof() verificar o tamanho do array e retorno um int
        $quantidadeNotas = sizeof($notas);

        if ($quantidadeNotas > 0){

            $somaNotas = 0;

            for( $i = 0; $i < $quantidadeNotas; $i++){
                $somaNotas = $somaNotas + $notas[$i];
            }
            
            $media = $somaNotas / $quantidadeNotas;

            return $media;

        } else {
            
            return null;
        
        }
    }
}