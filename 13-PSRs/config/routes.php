<?php

use Alura\Cursos\Controller\FormularioInsercao;

return [
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class,
    '/buscarCursosEmJson' => CursosEmJson::class,
    '/buscarCursosEmXml' => CursosEmXml::class
];