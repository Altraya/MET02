<?php
namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Handlers\NotFoundHandler;



class FrontController {
    public function __construct()
	{
	    $configuration = [ 
	        'settings' => [
	            'displayErrorDetails' => true,
	        ],    
        ];
        require_once('configs/bootstrap.php');
        
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
        	    ['cache' => false, 'debug' => true]
        	);
        
        	$view->addExtension(new \Slim\Views\TwigExtension($container['router'], $container['request']->getUri()));
        	
        	$fullUrl = $container["request"]->getUri()->getBasePath();
        	$fullUrl .= "/";
        	$fullUrl .= $container["request"]->getUri()->getPath();
    	    $view->getEnvironment()->addGlobal("current_path", $fullUrl);
    	    $view->getEnvironment()->addGlobal('session', $_SESSION);
    	    
            $view->addExtension(new \Twig_Extension_Debug());
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
        
               
       if(isset($_SESSION["nbMessageDisplay"])) //to call in all controller
       {
           $_SESSION["nbMessageDisplay"] += 1; //increment this to prevent view to display more than one time a message set by session
       }
       
		$app->run();
	}
	
    
}