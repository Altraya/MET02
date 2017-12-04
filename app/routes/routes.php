<?php

//Create controllers

//Define routes
require_once("app/controllers/AuthController.class.php");
require_once("app/controllers/HomeController.class.php");
require_once("app/controllers/AccountController.class.php");
require_once("app/controllers/ShopController.class.php");

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\AccountController;
use App\Controllers\ShopController;

//AUTH
//$app->get('/auth/login', php/controllers/AuthController::class . ':login');
$container["AuthController"] = function ($container) {
    return new AuthController($container);
};

$app->get('/', 'App\Controllers\HomeController:home');
$app->get('/404', 'App\Controllers\HomeController:notFound');
$app->get('/account', 'App\Controllers\AccountController:account');

$app->group('/auth', function() use ($container) {
    
    $this->map(['GET', 'POST'],'/login', 'App\Controllers\AuthController:login');
    $this->map(['GET', 'POST'],'/logout', 'App\Controllers\AuthController:logout');
    $this->map(['GET', 'POST'], '/signup', 'App\Controllers\AuthController:signup');
});

$app->group('/shop', function() use ($container) {
    $this->get('/cart', 'App\Controllers\ShopController:cart');
    $this->get('/checkout', 'App\Controllers\ShopController:checkout');
    $this->get('/{category}', 'App\Controllers\ShopController:shop');

});