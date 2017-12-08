<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ShopController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function shop(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $category = $request->getAttribute('category');
        $articleManager = new ArticleManager();
	    $result = $this->view->render($response, 'catalog.twig', ["category" => $category]);
	    return $result;
	    
    }
    
    public function cart(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'cart.twig', []);
	    return $result;
    }
    
    public function checkout(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'checkout.twig', []);
	    return $result;
    }
}