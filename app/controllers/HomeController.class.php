<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function home(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'home.twig', []);
	    return $result;
    }
    
    public function notFound(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, '404.twig', []);
	    return $result;
    }
    
    public function search(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $result = $this->view->render($response, 'search.twig', []);
        return $result;
    }
}