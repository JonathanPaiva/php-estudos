<?php

class Titular
{

    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getCPF():string
    {
        return $this->cpf;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strLen($nomeTitular) < 5){
            echo "Nome precisa ter mais de 5 caracteres.";
            exit();
        }
    }

}



