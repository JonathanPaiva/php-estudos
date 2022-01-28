<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizaHTMLTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class EditarCurso implements InterfaceControladorRequisicao
{

    use RenderizaHTMLTrait;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioCursos;

    public function __construct()
    {
        $entityManager  = (New EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao() : void
    {
        
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id ===false) {
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->repositorioCursos->find($id);

        echo $this->renderizaHTML('cursos/formulario-insercao.php',
        [
            'curso' => $curso,
            'titulo' => 'Alterar Curso - ' . $curso->getDescricao()
        ]);

    }

}