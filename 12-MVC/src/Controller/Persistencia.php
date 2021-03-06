<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMassageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{

    //o uso da trait da acesso a um pedaço de código contido dentro do arquivo sem precisar instanciar na class com o extends, assim podemos utilizar as funções contidas no arquivo trait normalmente com o $this->funcaoDesejada.
    use FlashMassageTrait;

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

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        
        if (!is_null($id) && $id !== false ) {
            $curso->setId($id);
            //comando merge serve para atualizar as informações do curso atual.
            $this->entityManager->merge($curso);
            $this->setMensagem('success','Curso Atualizado com Sucesso!');

        } else {
            $this->entityManager->persist($curso);
            $this->setMensagem('success','Curso Adicionado com Sucesso!');
        }

        $this->entityManager->flush();
        
        //comando header redireciona o arquivo para os parâmetros passados com o Location
        header('Location: /listar-cursos',true, 302);
    }
    
}