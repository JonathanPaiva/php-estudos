<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

/*
Documentação dos modelos de parâmetros
https://www.php.net/manual/en/pdostatement.fetch#refsect1-pdostatement.fetch-parameters
*/

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
