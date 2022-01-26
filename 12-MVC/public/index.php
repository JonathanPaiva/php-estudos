<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controler\FormularioInsercao;
use Alura\Cursos\Controler\ListarCursos;

switch ($_SERVER['PATH_INFO']) {

    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;

    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;

    default:
        echo "Error 404 - Not Found";
        break;

}