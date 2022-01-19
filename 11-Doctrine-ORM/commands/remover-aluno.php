<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory() ;
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];

//Utilizando desta forma, é feito uma query para buscar o aluno e uma para remover o aluno em questão.
/*
$aluno = $entityManager->find(Aluno::class,$id);

if (is_null($aluno) ){
    echo "Aluno inexistente!";
    exit();
}
*/

//pode ser utilizado da forma abaixo para otimizar e ganhar mais segurança no processo de remoção, com um entidade gerenciada, sem tratamentos de erros caso ele não exista. 
$aluno = $entityManager->getReference(Aluno::class, $id);

$entityManager->remove($aluno);
$entityManager->flush();