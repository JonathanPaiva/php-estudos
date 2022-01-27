<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerComHTML implements InterfaceControladorRequisicao
{

    public function processaRequisicao() : void
    {
        
        echo $this->renderizaHTML('cursos/formulario-insercao.php',
        [
            'titulo' => 'Novo Curso'            
        ]);

    }

}