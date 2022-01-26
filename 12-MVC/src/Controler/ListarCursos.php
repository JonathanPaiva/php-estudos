<?php

namespace Alura\Cursos\Controler;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao
{

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository((Curso::class));
    }

    public function processaRequisicao() : void
    {
        $cursos =  $this->repositorioDeCursos->findAll();
        $titulo = "Lista Cursos";
        require __DIR__ . '/../../view/cursos/listar-cursos.php';

    }

}