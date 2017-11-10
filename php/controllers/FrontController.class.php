<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

class FrontController {
    public function __construct()
	{
	    $configuration = [
	        'settings' => [
	            'displayErrorDetails' => true,
	        ],    
        ];
        

    	
        //$app = new \Slim\App;
        $c = new \Slim\Container($configuration);
        $app = new \Slim\App($c);

        require_once 'php/routes/routes.php';
        
		$app->run();
	}
	
    
}