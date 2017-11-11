<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

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
        
        // Get container
        $container = $app->getContainer();
        
    	$template_dir = 'templates/';
    	$compile_dir = 'templates_c/';
    	$config_dir = 'configs/';
    	$cache_dir = 'cache/';
        
        // Register component on container
       /* $container['view'] = function ($container) {
            $view = new \Slim\Views\Twig($template_dir, [
                'cache' => $cache_dir
            ]);
            
            // Instantiate and add Slim specific extension
            //$basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
            //$view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
            
            return $view;
        };*/
        
        $container['view'] = function($container) {
        	$view = new \Slim\Views\Twig(
        		['cache' => false]
        	);
        
        	$view->addExtension(new Slim\Views\TwigExtension($container['router'], $container['request']->getUri()));
        	return $view;
        };

        require_once 'php/routes/routes.php';
        
		$app->run();
	}
	
    
}