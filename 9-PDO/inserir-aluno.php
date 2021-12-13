<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;

$dataBasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $dataBasePath);

$student = new Student(null,'Aluno Teste', new \DateTimeImmutable('1999-12-10'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));

