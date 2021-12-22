<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = New Student(
    null, 
    "Nico Steppat",
    new DateTimeImmutable('1985-05-01')
);

$studentRepository->save($aStudent);

$bStudent = New Student(
    null, 
    "Chico Tripa",
    new DateTimeImmutable('1985-05-01')
);

$studentRepository->save($bStudent);

//Serve para confirmar a execução do procedimento
$connection->commit();

//serve para cancelar a execução do procedimento
$connection->rollBack();
