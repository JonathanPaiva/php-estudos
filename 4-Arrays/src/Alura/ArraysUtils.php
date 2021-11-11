<?php
declare(strict_types=1);

namespace Alura;

//a declaração declare(strict_types=1); impede a conversão automática dos atributos dos métodos, no caso do atributo int sendo passado num parâmetro sendo string.

class ArraysUtils
{
    public static function remover(string $elemento, array &$array)
    {
        //Função 'array_search' serve para capturar a posição de elementos dentro de um array. 
        //o uso do parâmetro 'strict' na função 'array_search' força a comparação do elemento e de seu tipo (int, string, etc...)
        $posicao = array_search($elemento, $array,true);
        
        //var_dump($posicao);

        //Função 'unset' serve para retirar valores de um array, passando como parâmetro sua posição.
           
        /*por padrão é convertido zero para false e false para zero, assim caso seja passado um elemento que não exista no array a informação iria retirar o primeiro elemento. 
        */

        //função 'is_int' retorna um boolean com a indiação se o parâmetro é um número ou não.
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado o elemento!";
        }
    }

    public static function getContasMaiorSaldo(int $saldo , array $array): array
    {
        $contasComSaldoMaior = array();

        foreach ($array as $chave => $valor){
            if ($valor>$saldo){
                $contasComSaldoMaior[] = $chave;
            }
        }
        
        return $contasComSaldoMaior;
    }

}