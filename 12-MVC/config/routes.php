<?php

use Alura\Cursos\Controller\EditarCurso;
use Alura\Cursos\Controller\ExcluirCurso;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Logout;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\RealizaLogin;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso'=>ExcluirCurso::class,
    '/alterar-curso'=> EditarCurso::class,
    '/login'=> FormularioLogin::class,
    '/realiza-login'=> RealizaLogin::class,
    '/logout' => Logout::class
];