<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa() : float
    {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        /*
        Em boas práticas é melhor evitar o uso de 'else' sendo assim pode ser feito um retorno de função vazio, como descrito no códiog abaixo. 
        Só será excutado os demais códigos caso não entre no critério da validação.
        */
        if ($valorATransferir>$this->saldo){
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        
        $contaDestino->depositar($valorATransferir);

    }

}