<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    
    public function createConnection() : PDO
    {

        $databasePath = __DIR__ . '/../../../banco.sqlite';

        return new PDO('sqlite:' . $databasePath);

    }

}
