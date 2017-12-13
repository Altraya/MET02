<?php

require_once("vendor/autoload.php");
require_once("app/managers/ConnectionManager.php");
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Managers\ConnectionManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../app"), $isDevMode);

// obtaining the entity manager
$conManager = new ConnectionManager();
$entityManager = $conManager->createEntityManager();