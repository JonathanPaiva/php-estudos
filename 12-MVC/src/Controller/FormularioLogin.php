<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizaHTMLTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{

    use RenderizaHTMLTrait;

    public function processaRequisicao() : void
    {

        echo $this->renderizaHTML('login/formulario.php',
        [
            'titulo' => 'Login'
        ]);
        
    }

}