<?php

namespace Alura\Banco\Modelo;

class Pessoa 
{
    private CPF $cpf;
    protected string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;        
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->cpf->getNumeroCPF();
    }

    protected function validarNomeTitular(string $nomeTitular)
    {
        if (strLen($nomeTitular) < 5){
            echo "Nome precisa ter mais de 5 caracteres.";
            exit();
        }
    }
}