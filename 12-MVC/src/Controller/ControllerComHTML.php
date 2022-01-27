<?php

namespace Alura\Cursos\Controller;

abstract class ControllerComHTML
{

    public function renderizaHTML(string $caminhoTemplate, array $dados) : string
    {
        
        extract($dados);

        //com essa função podemos inicializar o buffer de saída, onde o php guardará tudo que é exibido
        ob_start();
        
        require __DIR__ . '/../../view/' . $caminhoTemplate;

        //captura tudo que foi exibido no php até esse momento e guarda onde está sendo setado
        $html = ob_get_clean();

        return $html;

    }

}
