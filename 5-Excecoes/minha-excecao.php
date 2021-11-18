<?php

class MinhaExcecao extends DomainException
{

    public function getNome()
    {
        echo "Nome Exibido!";
    }

}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->getNome();
}

