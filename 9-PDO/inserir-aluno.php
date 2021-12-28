<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
//ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Vinicius', ''); DROP TABLE students; -- Dias",
    new \DateTimeImmutable('1997-10-15'));

//Controle do SQL Injection maliciosos
//pode ser utilizado nos parâmetros do Values o 'Nome do Parâmetro' ou a '?'
/*
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";
*/
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

/* o Uso do 'bindParam' faz com que seja anexado o endereço da variável utilizada e não os dados que a compõem no momento repassado. */

if ($statement->execute()) {
    echo "Aluno incluído";
}

exit();

var_dump($pdo->exec($sqlInsert));

