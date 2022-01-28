<?php

namespace Alura\Cursos\Helper;

trait FlashMassageTrait
{

    public function setMensagem(string $tipoMensagem, string $mensagem) : void
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipoMensagem'] = $tipoMensagem;
    }

}
