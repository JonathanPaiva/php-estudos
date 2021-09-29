<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '1234';
    }



}