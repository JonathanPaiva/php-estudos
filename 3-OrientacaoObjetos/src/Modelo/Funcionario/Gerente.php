<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return $this->getSalario();
    }

}