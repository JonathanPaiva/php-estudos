<?php

use Alura\Cursos\Controler\FormularioInsercao;
use Alura\Cursos\Controler\ListarCursos;
use Alura\Cursos\Controler\Persistencia;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class
];