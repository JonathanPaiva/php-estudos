<?php

class Titular
{

    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strLen($nomeTitular) < 5){
            echo "Nome precisa ter mais de 5 caracteres.";
            exit();
        }
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->cpf->getNumeroCPF();
    }

    public function getEnderecoTitular()
    {
        return $this->endereco;
    }

}



