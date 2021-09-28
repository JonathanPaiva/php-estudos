<?php

namespace Alura\Banco\Services;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function setBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function getTotalBonificacoes() : float 
    {
        return $this->totalBonificacoes;
    }
    
}