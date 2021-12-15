<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue( 1,  4,  PDO::PARAM_INT);

var_dump($preparedStatement->execute());

//tanto no value ou no param pode ser utilizado o tipo de campo com o parâmetro descrito abaixo.
$preparedStatement->bindValue( 1,  5,  PDO::PARAM_INT);

var_dump($preparedStatement->execute());

/* Pode ser utilizado um statement já montado para ser executado várias vezes de acordo com a necessidade. 
*/