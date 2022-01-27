<?php

namespace Alura\Cursos\Controler;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao() : void
    {
        
        //com esse filter pode restringir ao usuário digitar tags no lançamento da informação com má intensões.
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $curso = new Curso();
        $curso->setDescricao($descricao);

        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        //comando header redireciona o arquivo para os parâmetros passados com o Location
        header('Location: /listar-cursos',true, 302);
    }
    
}