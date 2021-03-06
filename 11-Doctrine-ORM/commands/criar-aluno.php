<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();

//o uso da expressão $argv[1] significa que será passado o parâmetro via linha de comando, assim podendo ser feito as inclusões de forma mais prática. 
$aluno->setNome($argv[1]);
//$aluno->setNome("Aluno Teste");

$entityManagerFactory = new EntityManagerFactory() ;
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);

/*
$aluno->setNome("Teste");

//método 'flush' serve para efetuar a alteração/inclusão/remoções no banco de dados. */
$entityManager->flush();

