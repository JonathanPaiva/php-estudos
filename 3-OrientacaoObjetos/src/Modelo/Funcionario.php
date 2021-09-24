<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(CPF $cpf, string $nome, string $cargo)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
    
    protected function setNome($nomeAlterado) : Void
    {
        $this->validarNomeTitular($nomeAlterado);
        $this->nome = $nomeAlterado;
    }
}