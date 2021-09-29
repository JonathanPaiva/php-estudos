<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calcularBonificacao() : float
    {
        return 500.0;
    }

    public function sobeDeNivel()
    {
        $this->setAumentoSalarial($this->getSalario() * 0.75);
    }

}