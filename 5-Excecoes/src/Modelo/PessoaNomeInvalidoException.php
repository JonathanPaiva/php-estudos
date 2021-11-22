<?php 

namespace Alura\Banco\Modelo;

use DomainException;

class PessoaNomeInvalidoException extends DomainException
{

    public function __construct(int $qtd)
    {
        $mensagem = "Nome Precisar Ter Mais de 5 Caracteres! Informado Possui Apenas $qtd";
        parent::__construct($mensagem);
    }

}