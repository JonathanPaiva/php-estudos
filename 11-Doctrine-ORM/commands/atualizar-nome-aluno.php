<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory() ;
$entityManager = $entityManagerFactory->getEntityManager();

//Recebo parâmetros pela linha de comando com os $argv[1] e $argv[2] - assim podendo passar informações desejadas.
$id = $argv[1];
$novoNome = $argv[2];

//Chamado um repositório para poder localizar e setar a atualização da informação desejada. 
$alunoRepository = $entityManager->getRepository(Aluno::class);
$aluno = $alunoRepository->find($id);

//Ou 

//que poderia ser feito também utilizando o próprio 'entityManager', não sendo necessário a chamada do respository
//$aluno = $entityManager->find(Aluno::class, $id);

$aluno->setNome($novoNome);

$entityManager->flush();