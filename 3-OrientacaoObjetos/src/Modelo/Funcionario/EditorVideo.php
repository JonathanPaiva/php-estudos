<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario
{
    public function calcularBonificacao() : float
    {
        return 600;
    }

}