<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizaHTMLTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    use RenderizaHTMLTrait;

    public function processaRequisicao() : void
    {
        
        echo $this->renderizaHTML('cursos/formulario-insercao.php',
        [
            'titulo' => 'Novo Curso'            
        ]);

    }

}