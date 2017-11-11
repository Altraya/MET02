<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AuthController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function login(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'login.twig', []);
	    return $result;
    }
    
    public function logout(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'logout.twig', []);
	    return $result;
    }
    
    public function signup(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'signup.twig', []);
	    return $result;
    }

}
   