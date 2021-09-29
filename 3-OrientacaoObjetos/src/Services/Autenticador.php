<?php

namespace Alura\Banco\Services;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha) : void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Ok, Usuário Logado no Sistema!";
        } else {
        echo "Ops. Senha Incorreta.";
        }
    }
}