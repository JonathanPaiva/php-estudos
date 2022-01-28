<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerComHTML implements InterfaceControladorRequisicao
{

    public function processaRequisicao() : void
    {

        echo $this->renderizaHTML('login/formulario.php',
        [
            'titulo' => 'Login'
        ]);
        
    }

}