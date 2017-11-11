<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AccountController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function account(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'account.twig', []);
	    return $result;
    }
}