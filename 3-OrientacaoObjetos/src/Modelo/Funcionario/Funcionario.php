<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(CPF $cpf, string $nome, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getSalario() : float
    {
        return $this->salario;
    }
    
    protected function setNome($nomeAlterado) : Void
    {
        $this->validarNomeTitular($nomeAlterado);
        $this->nome = $nomeAlterado;
    }

    public function setAumentoSalarial(float $valorAumento) : void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo!";
            return;
        }

        $this->salario += $valorAumento;

    }

    abstract function calcularBonificacao() : Float;

}