<?php
namespace App\Controllers;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use App\Handlers\NotFoundHandler;

require_once('app/handler/NotFoundHandler.class.php');
require_once('vendor/autoload.php');

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
        $container['view'] = function($container) {
        	
        	$view = new \Slim\Views\Twig(__DIR__ . '/../../templates', 
        	    ['cache' => false]
        	);
        
        	$view->addExtension(new \Slim\Views\TwigExtension($container['router'], $container['request']->getUri()));
        	return $view;
        };
        
        //Override the default Not Found Handler
        $container['notFoundHandler'] = function ($c) { 
            return new NotFoundHandler($c->get('view'), function ($request, $response) use ($c) {
                return $c['response'] 
                    ->withStatus(404); 
            }); 
        };
        
        require_once 'app/routes/routes.php';
        
		$app->run();
	}
	
    
}