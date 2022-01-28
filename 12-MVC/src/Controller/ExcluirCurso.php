<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMassageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class ExcluirCurso implements InterfaceControladorRequisicao
{

    use FlashMassageTrait;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager  = (New EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao() : void
    {
        
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id ===false) {
            $this->setMensagem('danger','Curso Inexistente!');
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class,$id);

        $this->entityManager->remove($curso);

        $this->entityManager->flush();
        
        $this->setMensagem('success','Curso Excluído!');
        header('Location: /listar-cursos');

    }

}