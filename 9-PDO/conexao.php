<?php

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

echo 'Conectei';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
