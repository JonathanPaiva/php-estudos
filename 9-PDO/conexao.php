<?php 

$dataBasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $dataBasePath);

echo 'Conectado';

/*
Documentação do PDO - Exec
https://www.php.net/manual/en/pdo.exec.php
*/
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');