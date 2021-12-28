<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

/*
Documentação dos modelos de parâmetros
https://www.php.net/manual/en/pdostatement.fetch#refsect1-pdostatement.fetch-parameters
*/

/* 
$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);
Pode ser substituído a conexão com banco de dados da seguinte forma: */

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);
