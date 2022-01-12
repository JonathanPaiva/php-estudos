<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */

    public function getEntityManager(): EntityManagerInterface
    {
        //__DIR__ captura o caminho atual da pasta do arquivo
        // '/..' desce um nível de pastas referente ao arquivo atual.
        $rootDir = __DIR__ . '/../..';

        /*para uso do createAnnotationMetaDataConfiguration é baseado em 'annotations', sendo necessário configurar informações via '/** --- ' 
        */
        
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'], 
            true
        );

        /*Necessário configurar a conexão com o banco de dados, podendo ser sql server, mysql, sqlite, etc... 
        Passado o driver de banco e o path com o caminho do arquivo do banco.
        */
        $connection = [ 
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/var/data/banco.sqlite'
        ];

        return EntityManager::create($connection,$config);
    }
}