<?php

namespace App\Managers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class ConnectionAbstractManager
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager = null;

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        if ($this->entityManager === null) {
            $this->entityManager = $this->createEntityManager();
        }

        return $this->entityManager;
    }

    /**
     * @return EntityManager
     */
    public function createEntityManager()
    {
        $path = array(__DIR__.'/app/managers');
        $devMode = true;

        $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

        // define credentials...
        $connectionOptions = array(
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'dbname'   => 'unicornshop',
            'user'     => 'unicornshop',
            'password' => 'MyLittleUnicornShop',
            'charset'  => 'utf8'
        );

        return EntityManager::create($connectionOptions, $config);
    }
}