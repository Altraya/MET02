<?php

//Create controllers
/*$app->getContainer()->getSingleton('AuthController', function () {
    return new AuthController();
});
$app->getContainer()->getSingleton('CatalogController', function () {
    return new CatalogController();
});*/

//Define routes
require_once("app/controllers/AuthController.class.php");

use App\Controllers\AuthController;

//AUTH
//$app->get('/auth/login', php/controllers/AuthController::class . ':login');
$container["AuthController"] = function ($container) {
    return new AuthController($container);
};

$app->group('/auth', function() use ($container) {
    $this->get('/login', 'App\Controllers\AuthController:login');
    $this->get('/logout', 'App\Controllers\AuthController:logout');
    $this->get('/signup', 'App\Controllers\AuthController:signup');
});