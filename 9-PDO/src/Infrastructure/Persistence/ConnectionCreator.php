<?php

namespace Alura\Pdo\Infraestructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';


        /* pode ser utilizado vários tipos de conecção a banco de dados, abaixo temos o exemplo de conexão a um mysql:

        $connection = new PDO(
            dsn:'mysql:host=172.17.0.2;dbname=banco',
            usaername: 'root',
            password: 'senhalura'
        );
        */

        $connection = new PDO('sqlite:' . $databasePath);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
