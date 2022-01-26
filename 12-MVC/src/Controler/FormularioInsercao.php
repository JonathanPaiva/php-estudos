<?php

namespace Alura\Cursos\Controler;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function processaRequisicao() : void
    {
        
        $titulo = "Novo Curso";
        require __DIR__ . '/../../view/cursos/formulario-insercao.php';

    }

}