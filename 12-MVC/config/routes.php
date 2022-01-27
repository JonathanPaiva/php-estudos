<?php

use Alura\Cursos\Controller\EditarCurso;
use Alura\Cursos\Controller\ExcluirCurso;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso'=>ExcluirCurso::class,
    '/alterar-curso'=> EditarCurso::class
];