<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;

$dataBasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $dataBasePath);

/*
Documentação dos modelos de parâmetros
https://www.php.net/manual/en/pdostatement.fetch#refsect1-pdostatement.fetch-parameters
*/

$statement = $pdo->query('SELECT * FROM students WHERE id = 1;');
var_dump($statement->fetchColumn(1)); exit();

$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);

$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);

echo $studentList[0][1];